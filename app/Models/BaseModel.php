<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model {

    public function scopeById($query, $id) {
        return $query->where('id', $id);
    }

    public function scopeByUserId($query, $userId) {
        return $query->where('users_id', $userId);
    }
}
