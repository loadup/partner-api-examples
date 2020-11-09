<?php
// This utility function can be used to make any GraphQL query or client.
// It's simply making an API call with LoadUp Authentication built in

function graphql_query(string $endpoint, string $query, array $variables = [], string $api_key): array
{
    $headers = ['Content-Type: application/json', "X-Access-Token: {$api_key}"];
    
    $data = @file_get_contents($endpoint, false, stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => $headers,
            'content' => json_encode(['query' => $query, 'variables' => $variables]),
        ]
    ]));

    if ($data === false) {
        $error = error_get_last();
        throw new \ErrorException($error['message'], $error['type']);
    }

    return json_decode($data, true);
}