<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tabungan extends Model
{
    use HasFactory;
    public function user() {
        $this->BelongsTo(User::class, 'id_user');
    }
    public function riwayat() {
        $this->hasMany(riwayat::class, 'id_tabungan');
    }
    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/buku/' . $this->cover))) {
            return unlink(public_path('images/buku/' . $this->cover));
        }
    }
}
