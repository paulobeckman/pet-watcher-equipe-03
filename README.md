### pet-watcher-equipe-03

## Instalação
## Em seu terminal:
# Instale o pacote
```bash
composer install
```

# Crie um .env com base o .env.exemple
```bash
Utilize os mesmo dados, altere apenas a sua senha do banco de dados, se tiver.
```

#  Nova chave no seu arquivo .env
```bash
php artisan key:generate
```

# Execute a migração
```bash
php artisan migrate:fresh
```
```bash
php artisan db:seed
```

# Inicie um servidor de desenvolvimento para a aplicação Laravel.
```bash
php artisan serve
```
# Permissão de acesso
Para facilitar o uso de níveis de acesso no Laravel, usaremos a lib Spatie.
```bash
composer require spatie/laravel-permission
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
php artisan optimize:clear
php artisan migrate
```

Para criar permissões podemos usar comandos do Laravel e Spatie no terminal de comandos:
```bash
php artisan permission:create-permission "admin"
php artisan permission:create-permission "user"
php artisan permission:create-permission "employee_user"
```
