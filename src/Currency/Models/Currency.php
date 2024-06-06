<?php

namespace Notch\Core\Currency\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function __construct()
    {
        $this->setConnection(config('core.currency.connection', config('database.default')));
    }
}
