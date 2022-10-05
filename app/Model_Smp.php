<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Smp extends Model
{
  protected $table = "tb_smp";
  protected $fillable = ['Npsn','NamaSekolah','Alamat','Akreditasi','Email','image'];
}
