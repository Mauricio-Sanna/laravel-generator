<?php

return [
   
    /*
    |--------------------------------------------------------------------------
    | Tenancy config
    |--------------------------------------------------------------------------
    |
    | Additional tenancy configuration.  
    |
    | This configuration does not apply to the entire package, but only to the 
    | files required by this particular system.
    |
    */

    'tenancy' => [

        /*
        | Dynamic tenancy namespaces
        */

        // Applies to models, auto_models, controllers, auto_controllers
        // True, will use additional '\Tenancy' namespace
        // False, auto_models will not use any additional namespace
        'use_tenancy_namespace' => false,
    


        /*
        | Model / AutoModel
        */

        // Prefix auto_models (i.e. GeneratedPost)
        'auto_model_prefix' => 'Generated',

        // Use an additional 'Namespace' (and folder) (i.e. Generated\GeneratedPost)
        'auto_model_namespace' => 'Generated\\',

        /*
        | Controller / AutoController
        */

        //
        'auto_controller_prefix' => 'Generated', // e.g. GeneratedPostController.php
    ],

    /*
    |--------------------------------------------------------------------------
    | Auto, models and controllers
    |--------------------------------------------------------------------------
    |
    | Allows custom configuration by creating one of:
    |   Model -> AutoModel 
    |   Model -> Auto\AutoModel 
    |
    | This configuration does not apply to the entire package, but only to the 
    | files required by this particular system.
    |
    */

    'tenant' => [
        // Use an additional namespace (and folder)
        // Default: ''
        // Output: Post, Auto\AutoPost
        // Example: '\Tenant'
        // Output: Tenant\Post, Tenant\Auto\AutoPost
        'tenant_models_namespace' => '',
        
        // Use an additional namespace (and folder)
        // Default: 'Tenant\\'
        // Example: Tenant\PostControlleer, Tenant\AutoPostControlleer
        'tenant_controllers_namespace' => '\Tenant',
    ],

    'auto_model' => [

        // Applies to models, auto_models
        // True, will use an additional dynamic '\ModelName' namespace (i.e. ModelName\ModelName)
        // False, will not use any additional namespace
        // 'use_auto_namespace' => true,

        // Prefix
        // Default: 'Auto'
        // Example output: AutoPost
        'prefix' => 'Auto',

        // Use an additional 'Namespace' (and folder) 
        // Default: 'Auto'
        // Example output: Auto\AutoPost
        'namespace' => 'Auto',
    ],


    'auto_controller' => [
        // Prefix
        // Default: 'Auto'
        // Example output: AutoController
        'prefix' => 'Auto',


        // 
        // 
        // TODO 
        // 
        // Can not create auto_controller
        // Used to crate the controller and estended controller
        // 
        //

        // Use an additional 'Namespace' (and folder) 
        // Default: 'Auto'
        // Example output: Auto\AutoPostAPIController
        'namespace' => 'Auto',        
    ],

    /*
    |--------------------------------------------------------------------------
    | Paths
    |--------------------------------------------------------------------------
    |
    */

    'path' => [

        'migration'         => database_path('migrations/'),

        'model'             => app_path('Models/'),

        'datatables'        => app_path('DataTables/'),

        'livewire_tables'   => app_path('Http/Livewire/'),

        'repository'        => app_path('Repositories/'),

        'routes'            => base_path('routes/web.php'),

        'api_routes'        => base_path('routes/api.php'),

        'request'           => app_path('Http/Requests/'),

        'api_request'       => app_path('Http/Requests/API/'),

        'controller'        => app_path('Http/Controllers/'),

        'api_controller'    => app_path('Http/Controllers/API/'),

        'api_resource'      => app_path('Http/Resources/'),

        'schema_files'      => resource_path('model_schemas/'),

        'seeder'            => database_path('seeders/'),

        'database_seeder'   => database_path('seeders/DatabaseSeeder.php'),

        'factory'           => database_path('factories/'),

        'view_provider'     => app_path('Providers/ViewServiceProvider.php'),

        'tests'             => base_path('tests/'),

        'repository_test'   => base_path('tests/Repositories/'),

        'api_test'          => base_path('tests/APIs/'),

        'views'             => resource_path('views/'),

        'menu_file'         => resource_path('views/layouts/menu.blade.php'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Namespaces
    |--------------------------------------------------------------------------
    |
    */

    'namespace' => [

        'model'             => 'App\Models',

        'datatables'        => 'App\DataTables',

        'livewire_tables'   => 'App\Http\Livewire',

        'repository'        => 'App\Repositories',

        'controller'        => 'App\Http\Controllers',

        'api_controller'    => 'App\Http\Controllers\API',

        'api_resource'      => 'App\Http\Resources',

        'request'           => 'App\Http\Requests',

        'api_request'       => 'App\Http\Requests\API',

        'seeder'            => 'Database\Seeders',

        'factory'           => 'Database\Factories',

        'tests'             => 'Tests',

        'repository_test'   => 'Tests\Repositories',

        'api_test'          => 'Tests\APIs',
    ],

    /*
    |--------------------------------------------------------------------------
    | Templates
    |--------------------------------------------------------------------------
    |
    */

    'templates' => 'adminlte-templates',

    /*
    |--------------------------------------------------------------------------
    | Model extend class
    |--------------------------------------------------------------------------
    |
    */

    'model_extend_class' => 'Illuminate\Database\Eloquent\Model',

    /*
    |--------------------------------------------------------------------------
    | API routes prefix & version
    |--------------------------------------------------------------------------
    |
    */

    'api_prefix'  => 'api',

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    */

    'options' => [

        'soft_delete' => false,

        'save_schema_file' => true,

        'localized' => false,

        'repository_pattern' => true,

        'resources' => false,

        'factory' => false,

        'seeder' => false,

        'swagger' => false, // generate swagger for your APIs

        'tests' => false, // generate test cases for your APIs

        'excluded_fields' => ['id'], // Array of columns that doesn't required while creating module
    ],

    /*
    |--------------------------------------------------------------------------
    | Prefixes
    |--------------------------------------------------------------------------
    |
    */

    'prefixes' => [

        'route' => '',  // e.g. admin or admin.shipping or admin.shipping.logistics

        'namespace' => '',  // e.g. Admin or Admin\Shipping or Admin\Shipping\Logistics

        'view' => '',  // e.g. admin or admin/shipping or admin/shipping/logistics
    ],

    /*
    |--------------------------------------------------------------------------
    | Table Types
    |
    | Possible Options: blade, datatables, livewire
    |--------------------------------------------------------------------------
    |
    */

    'tables' => 'blade',

    /*
    |--------------------------------------------------------------------------
    | Timestamp Fields
    |--------------------------------------------------------------------------
    |
    */

    'timestamps' => [

        'enabled'       => true,

        'created_at'    => 'created_at',

        'updated_at'    => 'updated_at',

        'deleted_at'    => 'deleted_at',
    ],

    /*
    |--------------------------------------------------------------------------
    | Specify custom doctrine mappings as per your need
    |--------------------------------------------------------------------------
    |
    */

    'from_table' => [

        'doctrine_mappings' => [],
    ],

];
