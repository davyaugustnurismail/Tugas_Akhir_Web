<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Todo extends Model
{
    use HasFactory;

    protected $table = 'blanktodo';
    protected $primaryKey = 'todo_id'; // Menentukan primary key
    protected $keyType = 'int'; // Menentukan tipe data primary key
    public $incrementing = true; // Menentukan auto-increment

    protected $fillable = ['judul', 'todo', 'tanggal', 'tanda', 'priority', 'shared', 'user_id'];

    protected $casts = [
        'shared' => 'boolean',
        'tanggal' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
