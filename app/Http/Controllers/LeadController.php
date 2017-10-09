<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\Lead;
use App\Http\Requests\LeadRequest;

Class LeadController extends Controller {

  public function storeLead(LeadRequest $request){

    $lead = new Lead();
    $lead->valorParcela = $request->valorParcela;
    $lead->valorImovel = $request->valorImovel;
    $lead->nome = $request->nome;
    $lead->email = $request->email;
    $lead->save();

    $json = "{id: $lead->id}";

    return json_encode($json);

  }//end storeLead


  public function updateLeadFamilia(LeadRequest $request){

    $lead = Lead::find($request->id);
    $lead->tipoFamilia = $request->tipoFamilia;

    try {
      $lead->save();
      $json = "{updated: true}";
    }
    catch (Exception $e) {
      $json = "{updated: false}";
    }

    return json_encode($json);

  }//end updateLeadFamilia


  public function updateLeadRegiao(LeadRequest $request){

    $lead = Lead::find($request->id);
    $lead->regiao = $request->regiao;

    try {
      $lead->save();
      $json = "{updated: true}";
    }
    catch (Exception $e) {
      $json = "{updated: false}";
    }

    return json_encode($json);

  }//end updateLeadRegiao


  public function updateLeadRenda(LeadRequest $request){

    $lead = Lead::find($request->id);
    $lead->valorRenda = $request->valorRenda;

    try {
      $lead->save();
      $json = "{updated: true}";
    }
    catch (Exception $e) {
      $json = "{updated: false}";
    }

    return json_encode($json);

  }//end updateLeadRenda


  public function getLeads(){

    $leads = Lead::all();

    return json_encode($leads);

  }
}
