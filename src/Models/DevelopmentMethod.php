<?php namespace TimeForTalent\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DevelopmentMethod extends Model
{
  use SoftDeletes;

  protected $fillable = ['name','description'];

}
