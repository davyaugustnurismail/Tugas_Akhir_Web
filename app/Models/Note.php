<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $table = 'blanknote';
    protected $primaryKey = 'note_id'; // Menentukan primary key
    protected $keyType = 'int'; // Menentukan tipe data primary key
    public $incrementing = true; // Menentukan auto-increment

    protected $fillable = ['judul', 'description', 'tanggal', 'tanda', 'priority', 'shared', 'user_id'];

    protected $casts = [
        'shared' => 'boolean',
        'tanggal' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
