<?php
/**
 * Developed by Saddam Hussain.
 * Email: engrsaddammahar@gmail.com
 * Autour: Saddam Hussain
 * Date: 5/22/2020
 * Time: 2:17 AM
 */

namespace App\Http\Controllers;


use App\Http\MTNotificationDTO;
use App\MTNotifications;
use Illuminate\Http\Request;
use Validator;

class MTNotificationController extends Controller
{
//JsonObject jo = new JsonObject();
//                jo.addProperty("driverName", rs.getString("driverName"));
//                jo.addProperty("contact", rs.getString("contact"));
//                jo.addProperty("address", rs.getString("address"));
//                jo.addProperty("dateOfBirth", rs.getString("dateOfBirth"));
//                jo.addProperty("cnic", rs.getString("cnic"));
//                jo.addProperty("eyeSight", rs.getString("eyeSight"));
//                jo.addProperty("disability", rs.getString("disability"));
//                jo.addProperty("license", rs.getString("license"));
//                jo.addProperty("licenseType", rs.getString("licenseType"));
//                jo.addProperty("licenseExpiry", rs.getString("licenseExpiry"));
//                jo.addProperty("licenseIssuingAuthority", rs.getString("licenseIssuingAuthority"));
//                jo.addProperty("licenseVerification", rs.getString("licenseVerification"));
//                jo.addProperty("transportCompany", rs.getString("transportCompany"));
//                list.add(jo);

//
//JsonObject jo = new JsonObject();
//jo.addProperty("vehicleRegistrationNumber", rs.getString("vehicleRegistrationNumber"));
//jo.addProperty("vehicleRegistrationAuthority", rs.getString("vehicleRegistrationAuthority"));
//jo.addProperty("vehicleType", rs.getString("vehicleType"));
//jo.addProperty("vehicleMake", rs.getString("vehicleMake"));
//jo.addProperty("vehicleModel", rs.getString("vehicleModel"));
//jo.addProperty("vehicleColor", rs.getString("vehicleColor"));
//jo.addProperty("chassisNo", rs.getString("chassisNo"));
//jo.addProperty("engineNo", rs.getString("engineNo"));
//jo.addProperty("seatingCapacity", rs.getString("seatingCapacity"));
//jo.addProperty("vehicleRouteNo", rs.getString("vehicleRouteNo"));
//jo.addProperty("routeCity", rs.getString("routeCity"));
//jo.addProperty("routePermitAuthority", rs.getString("routePermitAuthority"));
//jo.addProperty("routePermitExpiry", rs.getString("routePermitExpiry"));
//
//jo.addProperty("fitnessCertificateNumber", "fitnessCertificateNumber");
//jo.addProperty("fitnessCertificateAuthority", "fitnessCertificateAuthority");
//jo.addProperty("fitnessCertificateExpiry", "fitnessCertificateExpiry");
//jo.addProperty("tyreCondition", "tyreCondition");
//jo.addProperty("nextTyreCheckingDate", "nextTyreCheckingDate");
//jo.addProperty("fireExtinguisherExpiry", "fireExtinguisherExpiry");
//jo.addProperty("vechicleTransportCompany", "vechicleTransportCompany");
//jo.addProperty("vechicleTyreCondition", "vechicleTyreCondition");
//jo.addProperty("managerName", "managerName");
//jo.addProperty("managerCellNumber", "managerCellNumber");
//jo.addProperty("ownersName", "ownersName");
//jo.addProperty("ownersCellNumber", "ownersCellNumber");
//jo.addProperty("vechicleHasAC", "vechicleHasAC") ;
//jo.addProperty("headlights", "headlights");
//jo.addProperty("backlights", "backlights");
//jo.addProperty("fogLight", "fogLight");
//jo.addProperty("emergencyLight", "emergencyLight");
//jo.addProperty("hazardLights", "hazardLights");
//jo.addProperty("frontScreenWiper", "frontScreenWiper");
//jo.addProperty("sideMirror", "sideMirror");
//jo.addProperty("numberPlateAsPerPattern", "numberPlateAsPerPattern");
//jo.addProperty("roadSafetyCones", "roadSafetyCones");
//jo.addProperty("firstAidBox", "firstAidBox");
//jo.addProperty("tracking", "tracking");
//jo.addProperty("zeroSear", "zeroSear");
//jo.addProperty("movieRecording","movieRecording");
//
//
//list.add(jo);

    public function createMTNotification(Request $request, $partnerRole)
    {
        $params = $request->all();
        $exTxId = $request->header('external-tx-id');
        $params['externalTxId'] = $exTxId;
        $validator = Validator::make($params, $this->MORules());
        if ($validator->passes()) {

            $mo = new MTNotifications();

            $mo->partner_role_id = $partnerRole;
            $mo->product_id = $params['productId'];
            $mo->price_point_Id = $params['pricepointId'];
            $mo->mcc = $params['mcc'];
            $mo->mnc = $params['mnc'];
            $mo->transaction_uuid = $params['transactionUUID'];
            $mo->user_identifier = $params['userIdentifier'];
            $mo->large_account = $params['largeAccount'];
            $mo->mno_delivery_code = $params['mnoDeliveryCode'];
            $mo->tags = $params['tags'];
            $mo->external_tx_id = $exTxId;
            try {
                $mo->save();
            } catch (\Exception $e) {
                return response()->custom($params, $e->getMessage(), true, $exTxId, '500');
            }
            $dto = new MTNotificationDTO($mo);
            return response()->custom($dto, 'Saved', false, $exTxId, '201');

        } else {

            return response()->custom($params, $validator->errors()->all(), true, $exTxId, '500');
        }
    }

    public function MORules()
    {
        return [
            'productId' => 'required',
            'pricepointId' => 'required',
            'mcc' => 'required',
            'mnc' => 'required',
            'transactionUUID' => 'required',
            'userIdentifier' => 'required',
            'largeAccount' => 'required',
            'mnoDeliveryCode' => 'required',
            'tags' => 'required',
        ];
    }

}
