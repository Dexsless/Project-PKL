<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat extends Model
{
    use HasFactory;
    public function tabungan() {
        $this->BelongsTo(tabungan::class, 'id_tabungan');
    }
}
