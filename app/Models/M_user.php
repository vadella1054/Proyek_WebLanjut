<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class M_user extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['username','password','email'];

}