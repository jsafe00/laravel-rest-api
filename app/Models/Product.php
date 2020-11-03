<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use betterapp\LaravelDbEncrypter\Traits\EncryptableDbAttribute;
use Eloquent;
 
class Product extends Eloquent 
{
    use EncryptableDbAttribute;
    protected $fillable = [
        'name', 'price'
    ];

    protected $encryptable = [
        'name', 
        'price',
    ];
}