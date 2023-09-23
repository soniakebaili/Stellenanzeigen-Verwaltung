
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'title',
        'description',
        'employment_type',
        'location',
        'salary',
        'creation_date',
        'expiration_date',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function createdByUser()
    {
        return $this->belongsTo(User::class, 'created_by_user_id');
    }
}