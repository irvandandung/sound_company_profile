<?php

class Controller {

    protected function view($view_path, $data = []){
        require_once '../app/views/'.$view_path.'.php';
    }

    protected function model($model_path){
        require_once '../app/models/'.$model_path.'.php';
        return new $model_path;
    }
}