<?php
/**
 * Developed by Saddam Hussain.
 * Email: engrsaddammahar@gmail.com
 * Autour: Saddam Hussain
 * Date: 8/20/2020
 * Time: 1:03 PM
 */

namespace App\Http;

class DriverDto implements \JsonSerializable
{

    private $id, $driverName, $contact, $address, $dateOfBirth, $cnic, $eyeSight, $disability, $licenseNo, $licenseType, $licenseExpiry,
        $licenseIssuingAuthority, $licenseVerification, $transportCompany;


    public function _construct($arr)
    {
        $this->id = $arr['id'];
        $this->driverName = $arr['driver_name'];
        if (isset($arr['contact'])) {
            $this->contact = $arr['contact'];
        }
        if (isset($arr['address'])) {
            $this->address = $arr['address'];
        }
        if (isset($arr['date_of_birth'])) {
            $this->dateOfBirth = $arr['date_of_birth'];
        }
        if (isset($arr['eye_sight'])) {
            $this->eyeSight = $arr['eye_sight'];
        }
        if (isset($arr['disability'])) {
            $this->disability = $arr['disability'];
        }
        if (isset($arr['license_type'])) {
            $this->licenseType = $arr['license_type'];
        }
        if (isset($arr['license_issuing_authority'])) {
            $this->licenseIssuingAuthority = $arr['license_issuing_authority'];
        }
        if (isset($arr['license_verification'])) {
            $this->licenseVerification = $arr['license_verification'];
        }
        if (isset($arr['transport_company'])) {
            $this->transportCompany = $arr['transport_company'];
        }
        $this->cnic = $arr['cnic'];
        $this->licenseNo = $arr['license_no'];
        $this->licenseExpiry = $arr['license_expiry'];
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
     * @return mixed
     */
    public function getDriverName()
    {
        return $this->driverName;
    }

    /**
     * @param mixed $driverName
     */
    public function setDriverName($driverName): void
    {
        $this->driverName = $driverName;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $contact
     */
    public function setContact($contact): void
    {
        $this->contact = $contact;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getCnic()
    {
        return $this->cnic;
    }

    /**
     * @param mixed $cnic
     */
    public function setCnic($cnic): void
    {
        $this->cnic = $cnic;
    }

    /**
     * @return mixed
     */
    public function getEyeSight()
    {
        return $this->eyeSight;
    }

    /**
     * @param mixed $eyeSight
     */
    public function setEyeSight($eyeSight): void
    {
        $this->eyeSight = $eyeSight;
    }

    /**
     * @return mixed
     */
    public function getDisability()
    {
        return $this->disability;
    }

    /**
     * @param mixed $disability
     */
    public function setDisability($disability): void
    {
        $this->disability = $disability;
    }

    /**
     * @return mixed
     */
    public function getLicenseNo()
    {
        return $this->licenseNo;
    }

    /**
     * @param mixed $licenseNo
     */
    public function setLicenseNo($licenseNo): void
    {
        $this->licenseNo = $licenseNo;
    }

    /**
     * @return mixed
     */
    public function getLicenseType()
    {
        return $this->licenseType;
    }

    /**
     * @param mixed $licenseType
     */
    public function setLicenseType($licenseType): void
    {
        $this->licenseType = $licenseType;
    }

    /**
     * @return mixed
     */
    public function getLicenseExpiry()
    {
        return $this->licenseExpiry;
    }

    /**
     * @param mixed $licenseExpiry
     */
    public function setLicenseExpiry($licenseExpiry): void
    {
        $this->licenseExpiry = $licenseExpiry;
    }

    /**
     * @return mixed
     */
    public function getLicenseIssuingAuthority()
    {
        return $this->licenseIssuingAuthority;
    }

    /**
     * @param mixed $licenseIssuingAuthority
     */
    public function setLicenseIssuingAuthority($licenseIssuingAuthority): void
    {
        $this->licenseIssuingAuthority = $licenseIssuingAuthority;
    }

    /**
     * @return mixed
     */
    public function getLicenseVerification()
    {
        return $this->licenseVerification;
    }

    /**
     * @param mixed $licenseVerification
     */
    public function setLicenseVerification($licenseVerification): void
    {
        $this->licenseVerification = $licenseVerification;
    }

    /**
     * @return mixed
     */
    public function getTransportCompany()
    {
        return $this->transportCompany;
    }

    /**
     * @param mixed $transportCompany
     */
    public function setTransportCompany($transportCompany): void
    {
        $this->transportCompany = $transportCompany;
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