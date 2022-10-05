<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Sma extends Model
{
  protected $table = "tb_sma";
  protected $fillable = ['Npsn','NamaSekolah','Alamat','Akreditasi','Email','image'];
}
