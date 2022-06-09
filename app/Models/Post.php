<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
	protected $collection = 'camp';
    protected $fillable = [
    'Campaign Id',
    'Campaign Name',
    'Type',
    'GoLive Date',
    'Status',	
    'Start Date',	
    'End Date',	
    'Total Project Value',	
    'Subscription/AMC Value',	
    'AMC Cloud Charges',	
    'Total pending amount',	
    'Payment Stage'];
}
