<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trail extends Model
{
    protected $fillable = ['nome', 'partenza', 'arrivo', 'vicino', 'distanza', 'durata', 'percorso', 'difficolta', 'bambini' , 'animali', 'descrizione'];
}
