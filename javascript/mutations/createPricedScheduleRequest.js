const { gql } = require("graphql-request")
const client = require("../utils/graphqlClient")

const query = gql`
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
`

client.request(
  query,
  {
    inputs: {
      addressline1: '123 Main St',
      city: 'Atlanta',
      orderEmail: 'johndoe@gmail.com',
      orderFirstName: 'John',
      orderLastName: 'Doe',
      orderPrimaryPhone: '+12223334444',
      pricedPackageSku: 'LOADUP_270E60F8',
      state: 'GA',
      zip: '30307',
      externalReferenceId: 'your_reference_id' /*Typically your systems order#*/
    }
  }
).then((data) => console.log(data))
