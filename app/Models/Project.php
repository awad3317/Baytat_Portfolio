<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'type',
        'link',
        'image',
        'service_id',
        'start_date',
        'delivery_date',
        'price',
        'status',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'developer_project');
    }
}