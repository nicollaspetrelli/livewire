<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class Datatable extends Component
{
    use WithPagination;

    public $perPage = 10;

    public $sorts = [];

    public $filters = [
        "search" => null,
    ];

    public function mount()
    {
        $this->perPage = session()->get('perPage', 10);
    }

    public function updatedPerPage($value)
    {
        session()->put('perPage', $value);
        $this->resetPage();
    }

    public function sortBy($column)
    {
        // ['id' => 'asc', 'name' => 'desc']
        if(!isset($this->sorts[$column])) {
            return $this->sorts[$column] = 'asc';
        }

        if($this->sorts[$column] === 'asc') {
            return $this->sorts[$column] = 'desc';
        }

        unset($this->sorts[$column]);
    }

    public function applySorting($query)
    {
        foreach($this->sorts as $column => $direction) {
            $query->orderBy($column, $direction);
        }
        return $query;
    }

    public function updatedFilters()
    {
        $this->resetPage();
    }

    public function runQueryBuilder()
    {
        $query = Product::query()
                ->when($this->filters['search'], fn($query, $search) =>
                $query->where("name", "like", "%$search%"));

        return $this->applySorting($query);
    }

    public function render()
    {
        return view('livewire.datatable', [
            "products" => $this->runQueryBuilder()->paginate($this->perPage)
        ]);
    }
}
