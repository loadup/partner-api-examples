[![Open Source Love](https://badges.frapsoft.com/os/v2/open-source.svg?v=103)](https://github.com/ellerbrock/open-source-badges/)
[![MIT Licence](https://badges.frapsoft.com/os/mit/mit.svg?v=103)](https://opensource.org/licenses/mit-license.php)


<p align="center" width="100%">
    <img width="33%" src="/images/loadup-enterprise-logo@3x.png"> 
</p>

# PHP Examples

## Setup

This example doesn't use any Composer packages

## Files

*utils/graphqlClient.php*

This file has a common function that you can use to make an API call with LoadUp authentication

*queries/scheduleRequests.php*

This file uses the client to make a query, or request for data, for your current schedule requests
with pagination.

*mutations/createPricedScheduleRequest.php*

This file uses the client to make a mutation, or a change to data, to submit a new schedule request. This will be the most common kind of order you'll make.

*mutations/cancelScheduleRequest.php*

This file uses the client to make a mutation to cancel an existing schedule request. This will only work if the customer has not already schedule their service.

## Usage

To test out one of the queries, simply execute it via `php`
on the command line after you've replaced placeholders in the file with your values. 

```
php queries/scheduleRequests.php
```
