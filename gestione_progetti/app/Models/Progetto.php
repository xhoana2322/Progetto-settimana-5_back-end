<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Progetto extends Model
{
    use HasFactory;

    public function users(): BelongsTo {
        return $this->BelongsTo(User::class);
    }

    public function attivitas(): HasMany {
        return $this->hasMany(Attivita::class);
    }

}
