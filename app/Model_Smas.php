<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Smas extends Model
{
  protected $table = "tb_smas";
  protected $fillable = ['Npsn','NamaSekolah','Alamat','Akreditasi','Email','image'];
}
