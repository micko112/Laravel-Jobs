<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Job extends Model
{
    use hasFactory, Notifiable;

    protected $table = 'job_listing';
    protected $fillable = ['title', 'salary'];
    //
}
