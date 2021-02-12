# Livewire Laravel

Livewire é um framework full-stack para Laravel que torna a construção de interfaces dinâmicas simples, sem deixar o conforto do Laravel.

Internamente todas as requisições são baseadas em AJAX!

---

### Instalação Nutella

Temos duas opções para começar o **Livewire**...

1. Primeira opção é criar um projeto **Laravel** através do **JetJtream**:
Para instalar o **Livewire**:  `laravel new livewire --jet`

2. Segunda opção é se caso você já tenha uma aplicação Laravel e quer instalar o Livewire

    Primeiro passo é ter um projeto **Laravel** novo ou em andamento.

    Segundo passo é instalar o Jetstream via composer:
    Para instalar o **JetStream**: `composer require laravel/jetstream`
    Para instalar o **Livewire** no **Laravel**: `php artisan jetstream:install livewire`

---

### Instalação RAIZ totalmente via Composer

Criando um projeto Laravel novo: 
`composer create-project --prefer-dist laravel/laravel <nomedoprojeto>`

Entre dentro do projeto e instale o pacote do Livewire:
`composer require livewire/livewire`

---

### Primeiros Passos

Como saber se o Livewire foi instalado com sucesso?
Após sua instalação ao rodar o comando php artisan devem aparecer os comandos do livewire conforme abaixo:

`**Livewire**`
`livewire:configure-s3-upload-cleanup`   Configure temporary file upload s3 directory to                                                                                                                    -                                                                 automatically cleanup files older than 24hrs.
`livewire:copy`                           Copy a Livewire component
`livewire:delete`                       Delete a Livewire component
`livewire:discover`                    Regenerate Livewire component auto-discovery manifest
`livewire:make`                           Create a new Livewire component
`livewire:move`                           Move a Livewire component
`livewire:publish`                      Publish Livewire configuration
`livewire:stubs`                         Publish Livewire stubs

---

### Criando o primeiro componente

Criar componente: `php artisan livewire:make test`

Mover componente: `php artisan livewire:move test HelloWorld`

---

***Como iniciar um novo projeto Laravel?***

---

***Documentação Oficial:***

[Quickstart | Laravel](https://laravel-livewire.com/docs/2.x/quickstart)
