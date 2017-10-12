<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\Lead;
use App\Http\Requests\LeadRequest;
use Input;

Class LeadController extends Controller {

  public function storeLead(){

    header('Content-Type: application/json');

    $valorParcela = Request::query('valorParcela');
    $valorImovel = Request::query('valorImovel');
    $nome = Request::query('nome');
    $email = Request::query('email');

    $lead = new Lead();
    $lead->valorParcela = $valorParcela;
    $lead->valorImovel = $valorImovel;
    $lead->nome = $nome;
    $lead->email = $email;
    $lead->save();

    $json = array('id' => $lead->id);

    return json_encode($json);

  }//end storeLead


  public function updateLeadFamilia(){

    header('Content-Type: application/json');

    $id = Request::query('id');
    $tipoFamilia = Request::query('tipoFamilia');

    $lead = Lead::find($id);
    $lead->tipoFamilia = $tipoFamilia;

    try {
      $lead->save();
      $json = array('updated' => true);
    }
    catch (Exception $e) {
      $json = array('updated' => false);
    }

    return json_encode($json);

  }//end updateLeadFamilia


  public function updateLeadRegiao(){

    header('Content-Type: application/json');

    $id = Request::query('id');
    $regiao = Request::query('regiao');

    $lead = Lead::find($id);
    $lead->regiao = $regiao;

    try {
      $lead->save();
      $json = array('updated' => true);
    }
    catch (Exception $e) {
      $json = array('updated' => false);
    }

    return json_encode($json);

  }//end updateLeadRegiao


  public function updateLeadRenda(){

    header('Content-Type: application/json');

    $id = Request::query('id');
    $valorRenda = Request::query('renda');

    $lead = Lead::find($id);
    $lead->valorRenda = $valorRenda;

    try {
      $lead->save();
      $json = array('updated' => true);
    }
    catch (Exception $e) {
      $json = array('updated' => false);
    }

    return json_encode($json);

  }//end updateLeadRenda


  public function getLeads(){

    $leads = Lead::all();

    foreach($leads as $l){
      echo $l->valorParcela.' | '.$l->valorImovel.' | '.$l->nome.' | '.$l->email.' | '.$l->tipoFamilia.' | '.$l->regiao.' | '.$l->valorRenda.'<br><br>';
    }

    //return json_encode($leads);

  }
}
