<?php 
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
?>