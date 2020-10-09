<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $primaryKey = 'chapter_id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function classifications()
    {
        return $this->hasMany('App\Classification', 'chapter_id');
    }

    protected $fillable = [
        'chapter_id',
        'chapter_sub',
        'description',
        'check',
    ];

    public function chapterSave($params)
    {
      $isSave = $this->fill($params)->save();
      return $isSave;
    }
}
