<?php

require_once('./utils/graphqlClient.php');

$query = <<<'GRAPHQL'
mutation createPricedScheduleRequest($inputs: CreatePricedScheduleRequestInputs!) {
  createPricedScheduleRequest(inputs: $inputs) {
    scheduleRequest {
      conversionPageUrl
      id
      total
      externalReferenceId
    }
    errorCode
  }
}
GRAPHQL;

$result = graphql_query(
    // This is the Production URL. The sandbox URL would be:
    // https://sandbox.goloadup.com/partner_api/graphql
    'https://order.goloadup.com/partner_api/graphql',
    // This is the actual body of the message determining the action you want
    // GraphQL to execute on the server.
    $query,
    // This will mean only OPEN schedule requests will be returned.
    // You can find other possible inputs in the GraphQL docs.
    [
      'inputs' => [
        'addressline1' => '123 Main St',
        'city' => 'Atlanta',
        'orderEmail' => 'johndoe@gmail.com',
        'orderFirstName' => 'John',
        'orderLastName' => 'Doe',
        'orderPrimaryPhone' => '+12223334444',
        'pricedPackageSku' => 'LOADUP_270E60F8',
        'state' => 'GA',
        'zip' => '30307',
        'externalReferenceId' => 'your_reference_id'/*Typically your systems order#*/
        ]
    ],
    // Make sure to add your API Key here
    '<YOUR API KEY>'
);
var_dump($result);