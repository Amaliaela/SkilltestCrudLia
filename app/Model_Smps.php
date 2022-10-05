<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Smps extends Model
{
  protected $table = "tb_smps";
  protected $fillable = ['Npsn','NamaSekolah','Alamat','Akreditasi','Email','image'];
}
