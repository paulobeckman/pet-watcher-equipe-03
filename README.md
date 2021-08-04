### pet-watcher-equipe-03

### Install

In your terminal:
# instale o pacote
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

# run the migration
```bash
php artisan db:create
```
```bash
php artisan migrate:fresh
```
```bash
php artisan db:seed
```

# Iniciar um servidor de desenvolvimento para a aplicação Laravel.
```bash
php artisan serve
```
