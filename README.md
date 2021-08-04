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
php artisan db:create
```
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
