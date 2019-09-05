<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    /**
     * Polymorphic Relationship: an Admin account must be linked to a single User
     *
     * @see https://laravel.com/docs/5.8/eloquent-relationships#polymorphic-relationships
     */
    public function user() {
    	
        return $this->morphOne(User::class, 'userable');
    }
}
