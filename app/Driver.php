<?php
/**
 * Developed by Saddam Hussain.
 * Email: engrsaddammahar@gmail.com
 * Autour: Saddam Hussain
 * Date: 8/20/2020
 * Time: 12:44 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = 'drivers';
    protected $casts = [
        'tags' => 'array'
    ];
    protected $fillable = [
        'driver_name', 'contact', 'address', 'date_of_birth', 'cnic', 'avatar', 'eye_sight', 'disability', 'license', 'license_type',
        'license_expiry', 'license_issuing_authority', 'license_verification', 'transport_company'
    ];

}
