<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
       
    }

    public function getFillableAttributes()
    {
        return $this->model->getFillable();
    }

    //find by id
    // public function find($id){
    //     $primaryKey =  $this->model->getKeyName();
    // }
}
?>