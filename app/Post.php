<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // public function scopeIncomplete($query)
    // {
    //   return $query->where('completed',0);
    // }
    // protected $guarded=[];
    public function comments(){
      return $this->hasMany(Comment::class);
    }
    public function user(){
    return $this->belongsTo(User::class);
    }
    //filter archives
    public function scopeFilter($query,$filters){

      if($month=$filters['month']){
        $query->whereMonth('created_at',Carbon::parse($month)->month);
      }
      if($year=$filters['year']){
        $query->whereYear('created_at',$year);
      }


    }

    public static function archives(){
    return static::selectRaw('year(created_at) year,monthname(created_at) month,count(*) published')
      ->groupBy('year','month')
      ->orderByRaw('min(created_at) desc')
      ->get()
      ->toArray();
    }
    public function tags()
    {
       return $this->belongsToMany(Tag::class);
    }

}
