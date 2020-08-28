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
    private $fileName = 'avatar';
    private $imageFolder = 'C:\uploaded-images\driver\\';

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
                $dto = $this->modelToDto($dto, $driver);

                return response()->json($dto, 201);

            } catch (\Exception $e) {
                return response()->json($e->getMessage(), '500');
            }
        } else {
            return response()->json($validator->errors()->all(), 500);
        }
    }

    public function uploadImage(Request $request, $driverId)
    {
        if ($request->hasFile($this->fileName)) {
            $file = $request->file($this->fileName);
            $request->file($this->fileName)->move($this->imageFolder . $driverId . '\\', $file->getClientOriginalName());

            $driver = Driver::where('id', $driverId)->first();
            $driver->avatar = $this->imageFolder . $driverId . '\\' . $file->getClientOriginalName();
            $driver->save();
            return response()->json($this->imageFolder . $driverId . '\\' . $file->getClientOriginalName(), 200);
        }

        return response()->json('Not able to upload avatar', 500);
    }

    public function downloadImage(Request $request, $driverId)
    {
        $driver = Driver::where('id', $driverId)->first();
        $avatarPath = $driver->avatar;
        return response()->download($avatarPath);
    }

    public function getDriverById(Request $request, $id)
    {
        $driver = Driver::where('id', $id)->first();

        $dto = new DriverDto();
        $dto = $this->modelToDto($dto, $driver);

        return response()->json($dto, '200');
    }

    public function getAllDrivers(Request $request)
    {
        $drivers = Driver::all();

        $driverDtos = [];
        foreach ($drivers as $driver) {
            $dto = new DriverDto();
            $dto = $this->modelToDto($dto, $driver);
            array_push($driverDtos, $dto);
        }

        return response()->json($driverDtos, '200');
    }

    public function findByField(Request $request, $key, $value)
    {
        $driver = Driver::where($key, $value)->first();
        $dto = new DriverDto();
        $dto = $this->modelToDto($dto, $driver);
        return response()->json($dto, '200');
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

    public function modelToDto($dto, $elqModel)
    {
        $dto->setId($elqModel->id);
        $dto->setDriverName($elqModel->driver_name);
        $dto->setContact($elqModel->contact);
        $dto->setAddress($elqModel->address);
        $dto->setDateOfBirth($elqModel->date_of_birth);
        $dto->setCnic($elqModel->cnic);
        $dto->setEyeSight($elqModel->eye_sight);
        $dto->setDisability($elqModel->disability);
        $dto->setLicenseNO($elqModel->license_no);
        $dto->setLicenseType($elqModel->license_type);
        $dto->setLicenseExpiry($elqModel->license_expiry);
        $dto->setLicenseIssuingAuthority($elqModel->license_issuing_authority);
        $dto->setLicenseVerification($elqModel->license_verification);
        $dto->setTransportCompany($elqModel->transport_company);

        return $dto;
    }
}
