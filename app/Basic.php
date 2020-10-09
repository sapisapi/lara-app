<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basic extends Model
{
    public function chapter()
    {
      return $this->belongsTo('App\Chapter', 'chapter_id');
    }

    protected $fillable = [
        'chapter_id',
        'classification',
        'japanese',
        'english'
    ];

    public function basicSave($params)
    {
      $isSave = $this->fill($params)->save();
      return $isSave;
    }
}
