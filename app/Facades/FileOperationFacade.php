<?php


namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class FileOperationFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'FileOperations';
    }
}
