<?php
/**
 * Developed by Saddam Hussain.
 * Email: engrsaddammahar@gmail.com
 * Autour: Saddam Hussain
 * Date: 8/20/2020
 * Time: 2:51 AM
 */

namespace App\Http\Controllers;


use App\Http\VehicleDto;
use App\Vehicle;
use Illuminate\Http\Request;
use Validator;

class VehicleController extends Controller
{
    private $fileName = 'avatar';
    private $imageFolder = 'C:\uploaded-images\driver\\';

    public function VehicleRules()
    {
        return [
            'vehicleRegistrationNumber' => 'required',
            'vehicleType' => 'required',
            'vehicleMake' => 'required',
            'vehicleModel' => 'required',
            'vehicleColor' => 'required'
        ];
    }

    public function createVehicle(Request $request)
    {
        $params = $request->all();
        $validator = Validator::make($params, $this->VehicleRules());
        if ($validator->passes()) {

            $vehicle = new Vehicle();
            $vehicle = $this->arrToModel($vehicle, $params);

            try {

                $vehicle->save();
//                $dto = new VehicleDto($vehicle->toArray());
                $dto = new VehicleDto();
                $dto = $this->modelToDto($dto, $vehicle);

                return response()->json($dto, 201);

            } catch (\Exception $e) {
                return response()->json($e->getMessage(), '500');
            }
        } else {
            return response()->json($validator->errors()->all(), 500);
        }
    }

    public function uploadImage(Request $request, $vehicleId)
    {
        if ($request->hasFile($this->fileName)) {
            $file = $request->file($this->fileName);
            $request->file($this->fileName)->move($this->imageFolder . '\\' . $vehicleId, $file->getClientOriginalName());

            $vehicle = Vehicle::where('id', $vehicleId)->first();
            $vehicle->avatar = $this->imageFolder . $vehicleId . '\\' . $file->getClientOriginalName();
            $vehicle->save();
            return response()->json($this->imageFolder . $vehicleId . '\\' . $file->getClientOriginalName(), 200);
        }

        return response()->json('Not able to upload avatar', 500);
    }

    public function downloadImage(Request $request, $vehicleId)
    {
        $vehicle = Vehicle::where('id', $vehicleId)->first();
        $avatarPath = $vehicle->avatar;
        return response()->download($avatarPath);
    }

    public function getVehicleById(Request $request, $id)
    {
        $vehicle = Vehicle::where('id', $id)->first();

        $dto = new VehicleDto();
        $dto = $this->modelToDto($dto, $vehicle);

        return response()->json($dto, '200');
    }

    public function getAllVehicles(Request $request)
    {
        $vehicles = Vehicle::all();
        $vehicleDtos = [];
        foreach ($vehicles as $vehicle) {
            $dto = new VehicleDto();
            $dto = $this->modelToDto($dto, $vehicle);

            array_push($vehicleDtos, $dto);
        }
        return response()->json($vehicleDtos, '200');
    }

    public function findByField(Request $request, $key, $value)
    {
        $vehicle = Vehicle::where($key, $value)->first();

        $dto = new VehicleDto();
        $dto = $this->modelToDto($dto, $vehicle);

        return response()->json($dto, '200');
    }

    public function arrToModel($vehicle, $params)
    {
        $vehicle->vehicle_registration_number = $params['vehicleRegistrationNumber'];
        $vehicle->vehicle_type = $params['vehicleType'];
        $vehicle->vehicle_make = $params['vehicleMake'];
        $vehicle->vehicle_model = $params['vehicleModel'];
        $vehicle->vehicle_color = $params['vehicleColor'];

        if (isset($params['vehicleRegistrationAuthority'])) {
            $vehicle->vehicle_registration_authority = $params['vehicleRegistrationAuthority'];
        } else {
            $vehicle->vehicle_registration_authority = '';
        }
        if (isset($params['chassisNo'])) {
            $vehicle->chassis_no = $params['chassisNo'];
        } else {
            $vehicle->chassis_no = '';
        }
        if (isset($params['engineNo'])) {
            $vehicle->engine_no = $params['engineNo'];
        } else {
            $vehicle->engine_no = '';

        }
        if (isset($params['vehicleRouteNo'])) {
            $vehicle->vehicle_route_no = $params['vehicleRouteNo'];
        } else {
            $vehicle->vehicle_route_no = '';
        }
        if (isset($params['seatingCapacity'])) {
            $vehicle->seating_capacity = $params['seatingCapacity'];
        } else {
            $vehicle->seating_capacity = '';
        }
        if (isset($params['routeCity'])) {
            $vehicle->route_city = $params['routeCity'];
        } else {
            $vehicle->route_city = '';
        }
        if (isset($params['routePermitAuthority'])) {
            $vehicle->route_permit_authority = $params['routePermitAuthority'];
        } else {
            $vehicle->route_permit_authority = '';
        }
        if (isset($params['routePermitExpiry'])) {
            $vehicle->route_permit_expiry = $params['routePermitExpiry'];
        } else {
            $vehicle->route_permit_expiry = '';
        }
        if (isset($params['fitnessCertificateNumber'])) {
            $vehicle->fitness_certificate_number = $params['fitnessCertificateNumber'];
        } else {
            $vehicle->fitness_certificate_number = '';
        }
        if (isset($params['fitnessCertificateAuthority'])) {
            $vehicle->fitness_certificate_authority = $params['fitnessCertificateAuthority'];
        } else {
            $vehicle->fitness_certificate_authority = '';
        }
        if (isset($params['fitnessCertificateExpiry'])) {
            $vehicle->fitness_certificate_expiry = $params['fitnessCertificateExpiry'];
        } else {
            $vehicle->fitness_certificate_expiry = '';

        }
        if (isset($params['tyreCondition'])) {
            $vehicle->tyre_condition = $params['tyreCondition'];
        } else {
            $vehicle->tyre_condition = '';
        }
        if (isset($params['nextTyreCheckingDate'])) {
            $vehicle->next_tyre_checking_date = $params['nextTyreCheckingDate'];
        } else {
            $vehicle->next_tyre_checking_date = '';
        }
        if (isset($params['fireExtinguisherExpiry'])) {
            $vehicle->fire_extinguisher_expiry = $params['fireExtinguisherExpiry'];
        } else {
            $vehicle->fire_extinguisher_expiry = '';
        }
        if (isset($params['vechicleTransportCompany'])) {
            $vehicle->vechicle_transport_company = $params['vechicleTransportCompany'];
        } else {
            $vehicle->vechicle_transport_company = '';
        }
        if (isset($params['vechicleTyreCondition'])) {
            $vehicle->vechicle_tyre_condition = $params['vechicleTyreCondition'];
        } else {
            $vehicle->vechicle_tyre_condition = '';
        }
        if (isset($params[''])) {
            $vehicle->manager_name = $params['managerName'];
        } else {
            $vehicle->manager_name = '';
        }
        if (isset($params['managerCellNumber'])) {
            $vehicle->manager_cell_number = $params['managerCellNumber'];
        } else {
            $vehicle->manager_cell_number = '';
        }
        if (isset($params['ownersName'])) {
            $vehicle->owners_name = $params['ownersName'];
        } else {
            $vehicle->owners_name = '';
        }
        if (isset($params['ownersCellNumber'])) {
            $vehicle->owners_cell_number = $params['ownersCellNumber'];
        } else {
            $vehicle->owners_cell_number = '';
        }
        if (isset($params['vechicleHasAC'])) {
            $vehicle->vechicle_has_ac = $params['vechicleHasAC'];
        } else {
            $vehicle->vechicle_has_ac = '';
        }
        if (isset($params['headLights'])) {
            $vehicle->head_lights = $params['headLights'];
        } else {
            $vehicle->head_lights = '';
        }
        if (isset($params['backLights'])) {
            $vehicle->back_lights = $params['backLights'];
        } else {
            $vehicle->back_lights = '';
        }

        if (isset($params['fogLight'])) {
            $vehicle->fog_light = $params['fogLight'];
        } else {
            $vehicle->fog_light = '';
        }
        if (isset($params['emergencyLight'])) {
            $vehicle->emergency_light = $params['emergencyLight'];
        } else {
            $vehicle->emergency_light = '';
        }
        if (isset($params['hazardLights'])) {
            $vehicle->hazard_lights = $params['hazardLights'];
        } else {
            $vehicle->hazard_lights = '';
        }
        if (isset($params['frontScreenWiper'])) {
            $vehicle->front_screen_wiper = $params['frontScreenWiper'];
        } else {
            $vehicle->front_screen_wiper = '';
        }
        if (isset($params['ideMirror'])) {
            $vehicle->side_mirror = $params['sideMirror'];
        } else {
            $vehicle->side_mirror = '';

        }
        if (isset($params['numberPlateAsPerPattern'])) {
            $vehicle->number_plate_as_per_pattern = $params['numberPlateAsPerPattern'];
        } else {
            $vehicle->number_plate_as_per_pattern = '';
        }
        if (isset($params['roadSafetyCones'])) {
            $vehicle->road_safety_cones = $params['roadSafetyCones'];
        } else {
            $vehicle->road_safety_cones = '';
        }
        if (isset($params['firstAidBox'])) {
            $vehicle->first_aid_box = $params['firstAidBox'];
        } else {
            $vehicle->first_aid_box = '';
        }
        if (isset($params['tracking'])) {
            $vehicle->tracking = $params['tracking'];
        } else {
            $vehicle->tracking = '';
        }
        if (isset($params['zeroSear'])) {
            $vehicle->zero_sear = $params['zeroSear'];
        } else {
            $vehicle->zero_sear = '';
        }
        if (isset($params['movieRecording'])) {
            $vehicle->movie_recording = $params['movieRecording'];
        } else {
            $vehicle->movie_recording = '';
        }

        return $vehicle;
    }

    public function modelToDto($dto, $vehicle)
    {
        $dto->setId($vehicle->id);
        $dto->setVehicleRegistrationNumber($vehicle->vehicle_registration_number);
        $dto->setVehicleRegistrationAuthority($vehicle->vehicle_registration_authority);
        $dto->setVehicleType($vehicle->vehicle_type);
        $dto->setVehicleMake($vehicle->vehicle_make);
        $dto->setVehicleModel($vehicle->vehicle_model);
        $dto->setVehicleColor($vehicle->vehicle_color);
        $dto->setChassisNo($vehicle->chassis_no);
        $dto->setEngineNo($vehicle->engine_no);
        $dto->setVehicleRouteNo($vehicle->vehicle_route_no);
        $dto->setSeatingCapacity($vehicle->seating_capacity);
        $dto->setRouteCity($vehicle->route_city);
        $dto->setRoutePermitAuthority($vehicle->route_permit_authority);
        $dto->setRoutePermitExpiry($vehicle->route_permit_expiry);
        $dto->setFitnessCertificateNumber($vehicle->fitness_certificate_number);
        $dto->setFitnessCertificateAuthority($vehicle->fitness_certificate_authority);
        $dto->setFitnessCertificateExpiry($vehicle->fitness_certificate_expiry);
        $dto->setTyreCondition($vehicle->tyre_condition);
        $dto->setNextTyreCheckingDate($vehicle->next_tyre_checking_date);
        $dto->setFireExtinguisherExpiry($vehicle->fire_extinguisher_expiry);
        $dto->setVechicleTransportCompany($vehicle->vechicle_transport_company);
        $dto->setVechicleTyreCondition($vehicle->vechicle_tyre_condition);

        $dto->setManagerName($vehicle->manager_name);
        $dto->setManagerCellNumber($vehicle->manager_cell_number);
        $dto->setOwnersName($vehicle->owners_name);
        $dto->setOwnersCellNumber($vehicle->owners_cell_number);
        $dto->setVechicleHasAC($vehicle->vechicle_has_ac);
        $dto->setHeadLights($vehicle->head_lights);
        $dto->setBackLights($vehicle->back_lights);
        $dto->setFogLight($vehicle->fog_light);
        $dto->setEmergencyLight($vehicle->emergency_light);
        $dto->setHazardLights($vehicle->hazard_lights);
        $dto->setFrontScreenWiper($vehicle->front_screen_wiper);
        $dto->setSideMirror($vehicle->side_mirror);
        $dto->setNumberPlateAsPerPattern($vehicle->number_plate_as_per_pattern);
        $dto->setRoadSafetyCones($vehicle->road_safety_cones);
        $dto->setFirstAidBox($vehicle->first_aid_box);
        $dto->setTracking($vehicle->tracking);
        $dto->setZeroSear($vehicle->zero_sear);
        $dto->setMovieRecording($vehicle->movie_recording);

        return $dto;
    }
}

 
