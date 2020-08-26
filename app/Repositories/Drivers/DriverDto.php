<?php
/**
 * Developed by Saddam Hussain.
 * Email: engrsaddammahar@gmail.com
 * Autour: Saddam Hussain
 * Date: 8/20/2020
 * Time: 1:03 PM
 */

class DriverDto implements JsonSerializable
{

    private $driverName, $contact, $address, $dateOfBirth, $cnic, $eyeSight, $disability, $license, $licenseType, $licenseExpiry,
        $licenseIssuingAuthority, $licenseVerification, $transportCompany;


    public function _construct($arr)
    {
        $this->driverName = $arr['driver_name'];
        $this->contact = $arr['contact'];
        $this->address = $arr['address'];
        $this->dateOfBirth = $arr['date_of_birth'];
        $this->cnic = $arr['cnic'];
        $this->eyeSight = $arr['eye_sight'];
        $this->disability = $arr['disability'];
        $this->license = $arr['license'];
        $this->licenseType = $arr['licenseType'];
        $this->licenseExpiry = $arr['licenseExpiry'];
        $this->licenseIssuingAuthority = $arr['license_issuing_authority'];
        $this->licenseVerification = $arr['license_verification'];
        $this->transportCompany = $arr['transport_company'];
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
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param mixed $license
     */
    public function setLicense($license): void
    {
        $this->license = $license;
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