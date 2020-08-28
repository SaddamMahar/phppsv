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

class Vehicle extends Model
{
    protected $table = 'vehicles';
    protected $casts = [
        'tags' => 'array'
    ];
    protected $fillable = [
        'vehicle_registration_number', 'vehicle_registration_authority', 'vehicle_type', 'vehicle_make', 'vehicle_model',
        'vehicle_color', 'chassis_no', 'engine_no', 'avatar', 'seating_capacity', 'vehicle_route_no', 'route_city',
        'route_permit_authority', 'route_permit_expiry', 'fitness_certificate_number', 'fitness_certificate_authority', 'fitness_certificate_expiry',
        'tyre_condition', 'next_tyre_checking_date', 'fire_extinguisher_expiry', 'vechicle_transport_company',
        'vechicle_tyre_condition', 'manager_name', 'manager_cell_number', 'owners_name', 'owners_cell_number',
        'vechicle_has_ac', 'head_lights', 'back_lights', 'fog_light', 'emergency_light', 'hazard_lights',
        'front_screen_wiper', 'side_mirror', 'number_plate_as_per_pattern', 'road_safety_cones', 'first_aid_box',
        'tracking', 'zero_sear', 'movie_recording'
    ];

}
