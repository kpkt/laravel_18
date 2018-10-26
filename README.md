# laravel_18
Training Laravel 24 Oct - 26 Oct 2018

## Datepicker

include in resources/views/layouts/admin.blade.php

```
<head>...
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
...</head>
```
```
...
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script>
    $('.datepicker').datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true
    });
</script>
</body>
```

In form input date field:
```
<input... class="form-control datepicker"...>
```

## IDE Helper
install IDE Helper in project

install from composer
```
composer require barryvdh/laravel-ide-helper
composer require doctrine/dbal
```

Generate helper
```
php artisan ide-helper:generate
php artisan ide-helper:models
php artisan ide-helper:meta
```

