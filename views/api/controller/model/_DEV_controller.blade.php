@php
    echo "<?php".PHP_EOL;
@endphp
/*
|--------------------------------------------------------------------------
| {{ $config->modelNames->name }} Controller
|--------------------------------------------------------------------------
|
| Customize as required.
|
*/

namespace {{ $config->namespaces->apiController }}\Tenant\{{ $config->modelNames->name }};

// use {{ $config->namespaces->apiRequest }}\Tenant\{{ $config->modelNames->name }}\Create{{ $config->modelNames->name }}APIRequest;
// use {{ $config->namespaces->apiRequest }}\Tenant\{{ $config->modelNames->name }}\Update{{ $config->modelNames->name }}APIRequest;
use {{ $config->namespaces->model }}\{{ $config->modelNames->name }};
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use {{ $config->namespaces->app }}\Http\Controllers\{{ $config->autoController->prefix }}{{ $config->modelNames->name }}APIController;

{!! $docController !!}
class {{ $config->modelNames->name }}APIController extends {{ $config->autoController->prefix }}{{ $config->modelNames->name }}APIController
{
   
}
