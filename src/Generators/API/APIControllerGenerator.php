<?php

namespace InfyOm\Generator\Generators\API;

use Illuminate\Support\Str;
use InfyOm\Generator\Generators\BaseGenerator;

class APIControllerGenerator extends BaseGenerator
{
    private string $fileName;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->basePath = $this->config->paths->apiController.$this->config->modelNames->name.DIRECTORY_SEPARATOR;

        $this->controllerPath = $this->basePath;
        $this->controllerFileName = $this->config->modelNames->name.'APIController.php';

        $this->autoControllerPath = $this->basePath; 
        $this->autoControllerFileName = $this->config->autoController->prefix.$this->config->modelNames->name.'APIController.php';
    }

    public function variables(): array
    {
        return array_merge([], $this->docsVariables());
    }

    public function getViewName(): string
    {
        if ($this->config->options->repositoryPattern) {
            $templateName = 'repository.controller';
        } else {
            $templateName = 'model.auto_controller';
        }

        if ($this->config->options->resources) {
            $templateName .= '_resource';
        }

        return $templateName;
    }

    public function generate()
    {
        // $viewName = $this->getViewName();

        $templateData = view('laravel-generator::api.controller.'.'model.auto_controller', $this->variables())->render();

        g_filesystem()->createFile($this->autoControllerPath.$this->autoControllerFileName, $templateData);

        // Creates editable controller (if not exists)
        if (! file_exists($this->controllerPath.$this->controllerFileName)) {
            $templateData = view('laravel-generator::api.controller.'.'model.controller', $this->variables())->render();
    
            g_filesystem()->createFile($this->controllerPath.$this->controllerFileName, $templateData);
        }

        $this->config->commandComment(infy_nl().'API Controller created////////////////////////////////: ');
        $this->config->commandInfo($this->autoControllerFileName);
    }           

    protected function docsVariables(): array
    {
        $methods = ['controller', 'index', 'store', 'show', 'update', 'destroy'];

        if ($this->config->options->swagger) {
            $templatePrefix = 'controller';
            $templateType = 'swagger-generator';
        } else {
            $templatePrefix = 'api.docs.controller';
            $templateType = 'laravel-generator';
        }

        $variables = [];
        foreach ($methods as $method) {
            $variable = 'doc'.Str::title($method);
            $variables[$variable] = view($templateType.'::'.$templatePrefix.'.'.$method)->render();
        }

        return $variables;
    }

    public function rollback()
    {
        if ($this->rollbackFile($this->path, $this->fileName)) {
            $this->config->commandComment('API Controller file deleted: '.$this->fileName);
        }
    }
}
