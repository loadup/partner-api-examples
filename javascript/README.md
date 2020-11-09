[![Open Source Love](https://badges.frapsoft.com/os/v2/open-source.svg?v=103)](https://github.com/ellerbrock/open-source-badges/)
[![MIT Licence](https://badges.frapsoft.com/os/mit/mit.svg?v=103)](https://opensource.org/licenses/mit-license.php)


<p align="center" width="100%">
    <img width="33%" src="/images/loadup-enterprise-logo@3x.png"> 
</p>

# JavaScript Examples

## Setup

You'll need any recent version of Node and a NPM compatible package manager. 

Install node packages
```
npm install
```

## Files

*utils/graphqlClient.js*

This file has a common function that you can use to make an API call with LoadUp authentication

*queries/scheduleRequests.js*

This file uses the client to make a query, or request for data, for your current schedule requests
with pagination.

*mutations/createPricedScheduleRequest.js*

This file uses the client to make a mutation, or a change to data, to submit a new schedule request. This will be the most common kind of order you'll make.

## Usage

To test out one of the queries, simply execute it via `node`
on the command line after you've replaced placeholders in the file with your values. 

```
node queries/scheduleRequests.js
```
