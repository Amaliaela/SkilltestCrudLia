<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Sds extends Model
{
  protected $table = "tb_sds";
  protected $fillable = ['Npsn','NamaSekolah','Alamat','Akreditasi','Email','image'];
}
