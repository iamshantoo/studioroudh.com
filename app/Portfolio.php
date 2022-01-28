<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'portfolio_category_id',
        'title',
        'client_name',
        'thumbnail',
        'image'
    ];

    public function PortfolioCategory()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }
}
