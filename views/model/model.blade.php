@php
    echo "<?php".PHP_EOL;
@endphp
/*
|--------------------------------------------------------------------------
| {{ $config->modelNames->name }} Model
|--------------------------------------------------------------------------
|
| Customize as required.
|
*/

namespace {{ $config->namespaces->model }};

{{ 'use Illuminate\Database\Eloquent\Model' }};
use {{ $config->namespaces->model }}{{ $config->autoModel->_namespace }}\{{ $config->autoModel->prefix }}{{ $config->modelNames->name }};

class {{ $config->modelNames->name }} extends {{ $config->autoModel->prefix }}{{ $config->modelNames->name }}
{
    
}
