<?php

namespace App\Models;

use Date;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public string $author;
    public string $title;
    public string $text;
    public Date $date;
    public int $views;
    public int $likes;
}
