<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;
    protected $primaryKey = 'idpr';
    protected $fillable=['NomProduits','Description','prix','stock' ];
}

?>
