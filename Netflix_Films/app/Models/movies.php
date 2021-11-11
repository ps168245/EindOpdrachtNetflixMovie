<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class movies extends Model
{
    use HasFactory;

    protected $table = "movies";
    protected $fillable = ['FilmNaam', 'Genres','JaarUitgebracht'];
}
