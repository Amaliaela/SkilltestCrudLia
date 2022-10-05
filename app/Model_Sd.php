<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Sd extends Model
{
  protected $table = "tb_sd";
  protected $fillable = ['Npsn','NamaSekolah','Alamat','Akreditasi','Email','image'];
}
