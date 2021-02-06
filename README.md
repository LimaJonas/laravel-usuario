# laravel-usuario

## Setup
```
composer install
```

## Configurar o env
- renomear o arquivo .env.example para .env

## Criar o banco
```sql
CREATE DATABASE teste_usuario;
```

## Popular o banco
```
php artisan migrate --seed
```

### Iniciar servidor de desenvolvimento
```
php artisan serve
```