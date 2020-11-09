<?php

require_once('./utils/graphqlClient.php');


$query = <<<'GRAPHQL'
  query ScheduleRequests($inputs: ScheduleRequestsInputs!){
    scheduleRequests(inputs: $inputs){
      pagination {
        totalCount
        currentPage
      }
      scheduleRequests{
        id
        status
        order {
          status
        }
      }
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
    ['inputs' => ['status' => 'OPEN']], 
    // Make sure to add your API Key here
    '< YOUR API KEY>' 
);
var_dump($result);