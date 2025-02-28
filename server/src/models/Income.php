<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Income extends Model {
    protected $fillable = ['amount', 'user_id', 'date'];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}