<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
      $imagePath = ($this->image) ?  $this->image : "uploads/9KxEagsVxUgr0xCPHFEVi9RmUFx7jlLAu6IkzXnm.jpeg";
      return "/storage/" . $imagePath;
    }
    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function following(){
      return $this->belongsToMany(User::class);
    }
}
