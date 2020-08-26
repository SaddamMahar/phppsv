<?php
/**
 * Developed by Saddam Hussain.
 * Email: engrsaddammahar@gmail.com
 * Autour: Saddam Hussain
 * Date: 8/20/2020
 * Time: 2:51 AM
 */

namespace App\Http\Controllers;


use App\Driver;
use App\Http\DriverDto;
use Illuminate\Http\Request;
use Validator;

class DriverController extends Controller
{
    public function DriverRules()
    {
        return [
            'driverName' => 'required',
            'cnic' => 'required',
            'licenseNo' => 'required',
            'licenseExpiry' => 'required'
        ];
    }

    public function createDriver(Request $request)
    {
        $params = $request->all();
        $validator = Validator::make($params, $this->DriverRules());
        if ($validator->passes()) {

            $driver = new Driver();
            $driver = $this->arrToModel($driver, $params);

            try {
                $driver->save();
                $darray = $driver->toArray();
                $dto = new DriverDto($darray);
                $dto = $this->modelToDto($dto, $darray);

                return response()->json($dto, 201);

            } catch (\Exception $e) {
                return response()->json($e->getMessage(), '500');
            }
        } else {
            return response()->json($validator->errors()->all(), 500);
        }
    }

    public function getDriverById(Request $request, $id)
    {
        $driver = Driver::where('id', $id)->first();
        return response()->json($driver, '200');
    }

    public function getAllDrivers(Request $request)
    {
        $drivers = Driver::all();
        return response()->json($drivers, '200');
    }

    public function findByField(Request $request, $key, $value)
    {
        $driver = Driver::where($key, $value)->first();
        return response()->json($driver, '200');
    }

    public function arrToModel($driver, $params)
    {
        $driver->driver_name = $params['driverName'];
        $driver->cnic = $params['cnic'];
        $driver->license_no = $params['licenseNo'];
        $driver->license_expiry = $params['licenseExpiry'];
        if (isset($params['contact'])) {
            $driver->contact = $params['contact'];
        } else {
            $driver->contact = '';
        }
        if (isset($params['address'])) {
            $driver->address = $params['address'];
        } else {
            $driver->address = '';
        }
        if (isset($params['dateOfBirth'])) {
            $driver->date_of_birth = $params['dateOfBirth'];
        } else {
            $driver->date_of_birth = '';
        }
        if (isset($params['eyeSight'])) {
            $driver->eye_sight = $params['eyeSight'];
        } else {
            $driver->eye_sight = '';
        }
        if (isset($params['disability'])) {
            $driver->disability = $params['disability'];
        } else {
            $driver->disability = '';
        }
        if (isset($params['licenseType'])) {
            $driver->license_type = $params['licenseType'];
        } else {
            $driver->license_type = '';
        }
        if (isset($params['licenseIssuingAuthority'])) {
            $driver->license_issuing_authority = $params['licenseIssuingAuthority'];
        } else {
            $driver->license_issuing_authority = '';
        }
        if (isset($params['licenseVerification'])) {
            $driver->license_verification = $params['licenseVerification'];
        } else {
            $driver->license_verification = '';
        }
        if (isset($params['transportCompany'])) {
            $driver->transport_company = $params['transportCompany'];
        } else {
            $driver->transport_company = '';
        }
        return $driver;
    }

    public function modelToDto($dto, $darray)
    {
        $dto->setId($darray['id']);
        $dto->setDriverName($darray['driver_name']);
        $dto->setContact($darray['contact']);
        $dto->setAddress($darray['address']);
        $dto->setDateOfBirth($darray['date_of_birth']);
        $dto->setCnic($darray['cnic']);
        $dto->setEyeSight($darray['eye_sight']);
        $dto->setDisability($darray['disability']);
        $dto->setLicenseNO($darray['license_no']);
        $dto->setLicenseType($darray['license_type']);
        $dto->setLicenseExpiry($darray['license_expiry']);
        $dto->setLicenseIssuingAuthority($darray['license_issuing_authority']);
        $dto->setLicenseVerification($darray['license_verification']);
        $dto->setTransportCompany($darray['transport_company']);

        return $dto;
    }
}
