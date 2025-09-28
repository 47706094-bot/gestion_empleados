<?php
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
    public $timestamps = false;

    protected $fillable = ['nombre', 'email'];
}
