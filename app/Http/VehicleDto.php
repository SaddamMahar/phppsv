<?php
/**
 * Developed by Saddam Hussain.
 * Email: engrsaddammahar@gmail.com
 * Autour: Saddam Hussain
 * Date: 8/20/2020
 * Time: 1:03 PM
 */

namespace App\Http;

class VehicleDto implements \JsonSerializable
{
    private $id, $vehicleRegistrationNumber, $vehicleRegistrationAuthority, $vehicleType, $vehicleMake, $vehicleModel,
        $vehicleColor, $chassisNo, $engineNo, $seatingCapacity, $vehicleRouteNo, $routeCity,
        $routePermitAuthority, $route_permit_expiry, $fitnessCertificateNumber, $fitnessCertificateAuthority, $fitnessCertificateExpiry,
        $tyreCondition, $nextTyreCheckingDate, $fireExtinguisherExpiry, $vechicleTransportCompany,
        $vechicleTyreCondition, $managerName, $managerCellNumber, $ownersName, $ownersCellNumber,
        $vechicleHasAC, $headLights, $backLights, $fogLight, $emergencyLight, $hazardLights,
        $frontScreenWiper, $sideMirror, $numberPlateAsPerPattern, $roadSafetyCones, $firstAidBox,
        $tracking, $zeroSear, $movieRecording;

    public function _construct($arr)
    {
        $this->id = $arr['id'];
        $this->vehicleRegistrationNumber = $arr['vehicle_registration_number'];
        $this->vehicleRegistrationAuthority = $arr['vehicle_registration_authority'];
        $this->vehicleType = $arr['vehicle_type'];
        $this->vehicleMake = $arr['vehicle_make'];
        $this->vehicleModel = $arr['vehicle_model'];
        $this->vehicleColor = $arr['vehicle_color'];
        $this->chassisNo = $arr['chassis_no'];
        $this->engineNo = $arr['engine_no'];
        $this->seatingCapacity = $arr['seating_capacity'];
        $this->vehicleRouteNo = $arr['vehicle_route_no'];
        $this->routeCity = $arr['route_city'];
        $this->routePermitAuthority = $arr['route_permit_authority'];
        $this->routePermitExpiry = $arr['route_permit_expiry'];
        $this->fitnessCertificateNumber = $arr['fitness_certificate_number'];
        $this->fitnessCertificateAuthority = $arr['fitness_certificate_authority'];
        $this->fitnessCertificateExpiry = $arr['fitness_certificate_expiry'];
        $this->tyreCondition = $arr['tyre_condition'];
        $this->nextTyreCheckingDate = $arr['next_tyre_checking_date'];
        $this->fireExtinguisherExpiry = $arr['fire_extinguisher_expiry'];
        $this->vechicleTransportCompany = $arr['vechicle_transport_company'];
        $this->vechicleTyreCondition = $arr['vechicle_tyre_condition'];
        $this->managerName = $arr['manager_name'];
        $this->managerCellNumber = $arr['manager_cell_number'];
        $this->ownersName = $arr['owners_name'];
        $this->ownersCellNumber = $arr['owners_cell_number'];
        $this->vechicleHasAC = $arr['vechicle_has_ac'];
        $this->headLights = $arr['head_lights'];
        $this->backLights = $arr['back_lights'];
        $this->fogLight = $arr['fog_light'];
        $this->emergencyLight = $arr['emergency_light'];
        $this->hazardLights = $arr['hazard_lights'];
        $this->frontScreenWiper = $arr['front_screen_wiper'];
        $this->sideMirror = $arr['side_mirror'];
        $this->numberPlateAsPerPattern = $arr['number_plate_as_per_pattern'];
        $this->roadSafetyCones = $arr['road_safety_cones'];
        $this->firstAidBox = $arr['first_aid_box'];
        $this->tracking = $arr['tracking'];
        $this->zeroSear = $arr['zero_sear'];
        $this->movieRecording = $arr['movie_recording'];
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $vehicleRegistrationNumber
     */
    public function setVehicleRegistrationNumber($vehicleRegistrationNumber): void
    {
        $this->vehicleRegistrationNumber = $vehicleRegistrationNumber;
    }

    /**
     * @param mixed $vehicleRegistrationAuthority
     */
    public function setVehicleRegistrationAuthority($vehicleRegistrationAuthority): void
    {
        $this->vehicleRegistrationAuthority = $vehicleRegistrationAuthority;
    }

    /**
     * @param mixed $vehicleType
     */
    public function setVehicleType($vehicleType): void
    {
        $this->vehicleType = $vehicleType;
    }

    /**
     * @param mixed $vehicleMake
     */
    public function setVehicleMake($vehicleMake): void
    {
        $this->vehicleMake = $vehicleMake;
    }

    /**
     * @param mixed $vehicleModel
     */
    public function setVehicleModel($vehicleModel): void
    {
        $this->vehicleModel = $vehicleModel;
    }

    /**
     * @param mixed $vehicleColor
     */
    public function setVehicleColor($vehicleColor): void
    {
        $this->vehicleColor = $vehicleColor;
    }

    /**
     * @param mixed $chassisNo
     */
    public function setChassisNo($chassisNo): void
    {
        $this->chassisNo = $chassisNo;
    }

    /**
     * @param mixed $engineNo
     */
    public function setEngineNo($engineNo): void
    {
        $this->engineNo = $engineNo;
    }

    /**
     * @param mixed $seatingCapacity
     */
    public function setSeatingCapacity($seatingCapacity): void
    {
        $this->seatingCapacity = $seatingCapacity;
    }

    /**
     * @param mixed $vehicleRouteNo
     */
    public function setVehicleRouteNo($vehicleRouteNo): void
    {
        $this->vehicleRouteNo = $vehicleRouteNo;
    }

    /**
     * @param mixed $routeCity
     */
    public function setRouteCity($routeCity): void
    {
        $this->routeCity = $routeCity;
    }

    /**
     * @param mixed $routePermitAuthority
     */
    public function setRoutePermitAuthority($routePermitAuthority): void
    {
        $this->routePermitAuthority = $routePermitAuthority;
    }

    /**
     * @param mixed $route_permit_expiry
     */
    public function setRoutePermitExpiry($route_permit_expiry): void
    {
        $this->route_permit_expiry = $route_permit_expiry;
    }

    /**
     * @param mixed $fitnessCertificateNumber
     */
    public function setFitnessCertificateNumber($fitnessCertificateNumber): void
    {
        $this->fitnessCertificateNumber = $fitnessCertificateNumber;
    }

    /**
     * @param mixed $fitnessCertificateAuthority
     */
    public function setFitnessCertificateAuthority($fitnessCertificateAuthority): void
    {
        $this->fitnessCertificateAuthority = $fitnessCertificateAuthority;
    }

    /**
     * @param mixed $fitnessCertificateExpiry
     */
    public function setFitnessCertificateExpiry($fitnessCertificateExpiry): void
    {
        $this->fitnessCertificateExpiry = $fitnessCertificateExpiry;
    }

    /**
     * @param mixed $tyreCondition
     */
    public function setTyreCondition($tyreCondition): void
    {
        $this->tyreCondition = $tyreCondition;
    }

    /**
     * @param mixed $nextTyreCheckingDate
     */
    public function setNextTyreCheckingDate($nextTyreCheckingDate): void
    {
        $this->nextTyreCheckingDate = $nextTyreCheckingDate;
    }

    /**
     * @param mixed $fireExtinguisherExpiry
     */
    public function setFireExtinguisherExpiry($fireExtinguisherExpiry): void
    {
        $this->fireExtinguisherExpiry = $fireExtinguisherExpiry;
    }

    /**
     * @param mixed $vechicleTransportCompany
     */
    public function setVechicleTransportCompany($vechicleTransportCompany): void
    {
        $this->vechicleTransportCompany = $vechicleTransportCompany;
    }

    /**
     * @param mixed $vechicleTyreCondition
     */
    public function setVechicleTyreCondition($vechicleTyreCondition): void
    {
        $this->vechicleTyreCondition = $vechicleTyreCondition;
    }

    /**
     * @param mixed $managerName
     */
    public function setManagerName($managerName): void
    {
        $this->managerName = $managerName;
    }

    /**
     * @param mixed $managerCellNumber
     */
    public function setManagerCellNumber($managerCellNumber): void
    {
        $this->managerCellNumber = $managerCellNumber;
    }

    /**
     * @param mixed $ownersName
     */
    public function setOwnersName($ownersName): void
    {
        $this->ownersName = $ownersName;
    }

    /**
     * @param mixed $ownersCellNumber
     */
    public function setOwnersCellNumber($ownersCellNumber): void
    {
        $this->ownersCellNumber = $ownersCellNumber;
    }

    /**
     * @param mixed $vechicleHasAC
     */
    public function setVechicleHasAC($vechicleHasAC): void
    {
        $this->vechicleHasAC = $vechicleHasAC;
    }

    /**
     * @param mixed $headLights
     */
    public function setHeadLights($headLights): void
    {
        $this->headLights = $headLights;
    }

    /**
     * @param mixed $backLights
     */
    public function setBackLights($backLights): void
    {
        $this->backLights = $backLights;
    }

    /**
     * @param mixed $fogLight
     */
    public function setFogLight($fogLight): void
    {
        $this->fogLight = $fogLight;
    }

    /**
     * @param mixed $emergencyLight
     */
    public function setEmergencyLight($emergencyLight): void
    {
        $this->emergencyLight = $emergencyLight;
    }

    /**
     * @param mixed $hazardLights
     */
    public function setHazardLights($hazardLights): void
    {
        $this->hazardLights = $hazardLights;
    }

    /**
     * @param mixed $frontScreenWiper
     */
    public function setFrontScreenWiper($frontScreenWiper): void
    {
        $this->frontScreenWiper = $frontScreenWiper;
    }

    /**
     * @param mixed $sideMirror
     */
    public function setSideMirror($sideMirror): void
    {
        $this->sideMirror = $sideMirror;
    }

    /**
     * @param mixed $numberPlateAsPerPattern
     */
    public function setNumberPlateAsPerPattern($numberPlateAsPerPattern): void
    {
        $this->numberPlateAsPerPattern = $numberPlateAsPerPattern;
    }

    /**
     * @param mixed $roadSafetyCones
     */
    public function setRoadSafetyCones($roadSafetyCones): void
    {
        $this->roadSafetyCones = $roadSafetyCones;
    }

    /**
     * @param mixed $firstAidBox
     */
    public function setFirstAidBox($firstAidBox): void
    {
        $this->firstAidBox = $firstAidBox;
    }

    /**
     * @param mixed $tracking
     */
    public function setTracking($tracking): void
    {
        $this->tracking = $tracking;
    }

    /**
     * @param mixed $zeroSear
     */
    public function setZeroSear($zeroSear): void
    {
        $this->zeroSear = $zeroSear;
    }

    /**
     * @param mixed $movieRecording
     */
    public function setMovieRecording($movieRecording): void
    {
        $this->movieRecording = $movieRecording;
    }

    /**
     * @return mixed
     */
    public function getVehicleRegistrationNumber()
    {
        return $this->vehicleRegistrationNumber;
    }

    /**
     * @return mixed
     */
    public function getVehicleRegistrationAuthority()
    {
        return $this->vehicleRegistrationAuthority;
    }

    /**
     * @return mixed
     */
    public function getVehicleType()
    {
        return $this->vehicleType;
    }

    /**
     * @return mixed
     */
    public function getVehicleMake()
    {
        return $this->vehicleMake;
    }

    /**
     * @return mixed
     */
    public function getVehicleModel()
    {
        return $this->vehicleModel;
    }

    /**
     * @return mixed
     */
    public function getVehicleColor()
    {
        return $this->vehicleColor;
    }

    /**
     * @return mixed
     */
    public function getChassisNo()
    {
        return $this->chassisNo;
    }

    /**
     * @return mixed
     */
    public function getEngineNo()
    {
        return $this->engineNo;
    }

    /**
     * @return mixed
     */
    public function getSeatingCapacity()
    {
        return $this->seatingCapacity;
    }

    /**
     * @return mixed
     */
    public function getVehicleRouteNo()
    {
        return $this->vehicleRouteNo;
    }

    /**
     * @return mixed
     */
    public function getRouteCity()
    {
        return $this->routeCity;
    }

    /**
     * @return mixed
     */
    public function getRoutePermitAuthority()
    {
        return $this->routePermitAuthority;
    }

    /**
     * @return mixed
     */
    public function getRoutePermitExpiry()
    {
        return $this->route_permit_expiry;
    }

    /**
     * @return mixed
     */
    public function getFitnessCertificateNumber()
    {
        return $this->fitnessCertificateNumber;
    }

    /**
     * @return mixed
     */
    public function getFitnessCertificateAuthority()
    {
        return $this->fitnessCertificateAuthority;
    }

    /**
     * @return mixed
     */
    public function getFitnessCertificateExpiry()
    {
        return $this->fitnessCertificateExpiry;
    }

    /**
     * @return mixed
     */
    public function getTyreCondition()
    {
        return $this->tyreCondition;
    }

    /**
     * @return mixed
     */
    public function getNextTyreCheckingDate()
    {
        return $this->nextTyreCheckingDate;
    }

    /**
     * @return mixed
     */
    public function getFireExtinguisherExpiry()
    {
        return $this->fireExtinguisherExpiry;
    }

    /**
     * @return mixed
     */
    public function getVechicleTransportCompany()
    {
        return $this->vechicleTransportCompany;
    }

    /**
     * @return mixed
     */
    public function getVechicleTyreCondition()
    {
        return $this->vechicleTyreCondition;
    }

    /**
     * @return mixed
     */
    public function getManagerName()
    {
        return $this->managerName;
    }

    /**
     * @return mixed
     */
    public function getManagerCellNumber()
    {
        return $this->managerCellNumber;
    }

    /**
     * @return mixed
     */
    public function getOwnersName()
    {
        return $this->ownersName;
    }

    /**
     * @return mixed
     */
    public function getOwnersCellNumber()
    {
        return $this->ownersCellNumber;
    }

    /**
     * @return mixed
     */
    public function getVechicleHasAC()
    {
        return $this->vechicleHasAC;
    }

    /**
     * @return mixed
     */
    public function getHeadLights()
    {
        return $this->headLights;
    }

    /**
     * @return mixed
     */
    public function getBackLights()
    {
        return $this->backLights;
    }

    /**
     * @return mixed
     */
    public function getFogLight()
    {
        return $this->fogLight;
    }

    /**
     * @return mixed
     */
    public function getEmergencyLight()
    {
        return $this->emergencyLight;
    }

    /**
     * @return mixed
     */
    public function getHazardLights()
    {
        return $this->hazardLights;
    }

    /**
     * @return mixed
     */
    public function getFrontScreenWiper()
    {
        return $this->frontScreenWiper;
    }

    /**
     * @return mixed
     */
    public function getSideMirror()
    {
        return $this->sideMirror;
    }

    /**
     * @return mixed
     */
    public function getNumberPlateAsPerPattern()
    {
        return $this->numberPlateAsPerPattern;
    }

    /**
     * @return mixed
     */
    public function getRoadSafetyCones()
    {
        return $this->roadSafetyCones;
    }

    /**
     * @return mixed
     */
    public function getFirstAidBox()
    {
        return $this->firstAidBox;
    }

    /**
     * @return mixed
     */
    public function getTracking()
    {
        return $this->tracking;
    }

    /**
     * @return mixed
     */
    public function getZeroSear()
    {
        return $this->zeroSear;
    }

    /**
     * @return mixed
     */
    public function getMovieRecording()
    {
        return $this->movieRecording;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}