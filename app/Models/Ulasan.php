<?php

namespace App\Models;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Ulasan extends Model
{
    use HasFactory;
    
    public function user(){
        return $this->belongsTo(related:User::class);
    }
    public function buku(){
        return $this->belongsTo(related:Buku::class);
    }
}
