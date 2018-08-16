<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turk extends Model
{
    //
    protected $table = 'turkia';

    static public function getTurkia()
    {
    	$turks = self::all();
    	//dd($turks);
    	return $turks;
    }
}
