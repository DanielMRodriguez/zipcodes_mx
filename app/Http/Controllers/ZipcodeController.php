<?php

namespace App\Http\Controllers;

use App\Models\Zipcode;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ZipcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $zipcodes = Zipcode::all();
        // $zipcodesCollection = new Collection($zipcodes);

        $zipcodesResponse = $zipcodes->map(function ($item, $value) {
            return array(
                "zip_code" => $item->zip_code,
                "locality" => $item->locality,
                "federal_entity" => $item->federal_ent->name,
                "municipality" => $item->munici->name,
            );
        });
        // foreach ($zipcodes  as $key => $value) {

        // }
        return response(array("zip_codes" => [$zipcodesResponse]))
            ->header('Content-Type', 'application/json');
    }

   

    /**
     * Display the specified resource.
     *
     * @param  Integer  $zipcode
     * @return \Illuminate\Http\Response
     */
    public function show($zipcode)
    {
        $zipcodeModel = Zipcode::where("zip_code", $zipcode)->get()->first();
   
        $zipReponse = array(
            "zip_code" => $zipcodeModel->zip_code,
            "federal_entity" => array(
                "key" => $zipcodeModel->federal_ent->key,
                "name" => $zipcodeModel->federal_ent->name,
                "code" => $zipcodeModel->federal_ent->code
            ),
            "settlements" => $this->getSettlements($zipcodeModel),
            "municipality" => array(
                "key" => $zipcodeModel->munici->key,
                "name" => $zipcodeModel->munici->name
            )

        );
        return response($zipReponse)->header('Content-Type', 'application/json');
    }

    private function getSettlements(Zipcode $zipcode)
    {
       
        $settlements = $zipcode->settlements;
        
        $returnSettlments = $settlements->map(function ($item) {
            return array(
                "key" => $item->key,
                "name" => $item->name,
                "zone_type" => $item->zone_type,
                "settlement_type" => array("name" => $item->settlement_type)
            );
        });

        return $returnSettlments;
    }
}
