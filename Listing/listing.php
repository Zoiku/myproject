<?php 
    include_once './Listing/Listing-1.php';
    include_once './Listing/Listing-2.php';


    $gseEndpoint_1_URL = "https://dev.kwayisi.org/apis/gse/equities/";
    $gseEndpoint_1_JSON = file_get_contents($gseEndpoint_1_URL);
    $gseEndpoint_1_DECODE = json_decode($gseEndpoint_1_JSON);
    $listings_array = array();
    

    foreach($gseEndpoint_1_DECODE as $data){
        $gseEndpoint_2_URL = "$gseEndpoint_1_URL$data->name";
        $gseEndpoint_2_JSON = file_get_contents($gseEndpoint_2_URL);
        $gseEndpoint_2_DECODE = json_decode($gseEndpoint_2_JSON);

        $company = $gseEndpoint_2_DECODE->company;

        $symbol = $gseEndpoint_2_DECODE->name ?? "--";
        $name = $company->name ?? "--";
        $industry = $company->industry ?? "--";
        $capital = $gseEndpoint_2_DECODE->capital ?? "--";
        $email = $company->email ?? "--";
        $website = $company->website ?? "--";
        $shares = $gseEndpoint_2_DECODE->shares ?? "--";
        $price = $gseEndpoint_2_DECODE->price ?? "--";

        array_push($listings_array, $gseEndpoint_2_DECODE);
      }
