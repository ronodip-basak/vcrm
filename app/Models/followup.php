<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class followup extends Model
{
    use HasFactory;
    public function lead() {
        return $this->belongsTo(Lead::class, 'lead_id');
    }
}
