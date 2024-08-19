<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LevelModel extends Model
{
    use HasFactory;
    protected $primaryKey = "level_id";
    protected $table = "m_level";
    // protected $guarded = ["level_id"];
    protected $fillable=['level_kode','level_nama'];

    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(UserModel::class, "user_id");
    // }
}
