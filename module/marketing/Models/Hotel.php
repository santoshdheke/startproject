<?php

namespace Module\Marketing\Models;


use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{

    protected $connection = 'hotel';

    protected $fillable = [
        'name', 'slug', 'slogan', 'email', 'phone_no', 'address', 'logo', 'latitude',
        'longitude', 'seo_title', 'seo_description', 'seo_keyword', 'domain_type'
    ];
}
