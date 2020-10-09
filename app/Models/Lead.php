<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function followups() {
        return $this->hasMany(followup::class);
    }

    public function contactperson() {
        return $this->hasOne(ContactPerson::class, 'lead_id');
    }

    public function business() {
        return $this->hasOne(Business::class, 'lead_id');
    }
    public function decisionmaker(){
        return $this->hasOne(DecisionMaker::class, 'lead_id');
    }
}
