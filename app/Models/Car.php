

<?php
/*
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Car extends Model
{
    public $timestamp=false;
}
    */



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $table = 'cars';
    protected $fillable = [
        'name',
        'year',
        'engine',
        'code',
        'air_condition',
        'brand'

    ];
}
