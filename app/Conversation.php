<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    public function chapter()
    {
      return $this->belongsTo('App\Chapter', 'chapter_id');
    }

    protected $fillable = [
        'chapter_id',
        'unit',
        'mission',
        'japanese',
        'english',
        'explanation',
        'tip',
    ];
    public function conversationSave($params)
    {
      $isSave = $this->fill($params)->save();
      return $isSave;
    }
}
