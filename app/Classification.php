<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    public function chapter()
    {
      return $this->belongsTo('App\Chapter', 'chapter_id');
    }

    protected $fillable = [
        'chapter_id',
        'classification',
        'classification_sub',
        'classification_des',
      ];

    public function classificationSave($params)
    {
      $isSave = $this->fill($params)->save();
      return $isSave;
    }
}
