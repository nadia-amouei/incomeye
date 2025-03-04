<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $fillable = ['title', 'value', 'income_id'];

    public function Incomes()
    {
        return $this->hasMany(Income::class);
    }
}