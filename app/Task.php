<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * Avec eloquent les tables de la BDD sont automatisuements convertis voir doc 
 * https://laravel.com/docs/6.x/eloquent
 */

 class Task extends Model {
     // permet de dire les chammps qu'on peut changer et ignorer les autres
     protected $fillable = [
         'title',
         'completion',
         'status',
         'category_id'
     ];
 }