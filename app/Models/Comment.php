<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';

    protected $fillable = [
        
        'nft_id',
        'content'
    ];

    public function nft()
    {
        return $this->belongsTo(Nft::class, 'nft_id');
    }
}
