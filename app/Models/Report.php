<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use HasFactory, SoftDeletes ;

    protected $guarded = [];


    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function statuse(): BelongsTo
    {
        return $this->BelongsTo(Statuse::class);
    }

}
