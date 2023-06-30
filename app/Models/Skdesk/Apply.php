<?php

namespace App\Models\Skdesk;

use App\Models\Skdesk\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apply extends Model
{
    use HasFactory;
    protected $connection = 'mysql_SkDesk';
    protected $table = "apply";

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service');
    }
    public function order()
    {
        return $this->belongsTo(Order::class, 'id_order');
    }
}
