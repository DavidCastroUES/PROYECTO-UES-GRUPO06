<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conducta extends Model
{
    protected $fillable = ['id','moral_civica','nota_conducta'];
    protected $dates = ['created_at','updated_at'];

        public function scopeCivica($query, $civica)
	{
		return $query->where('moral_civica', 'LIKE', "%$civica%");
	}
}