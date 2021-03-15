require_relative "../utils/graphql_client"

CreatePricedScheduleRequestMutation = Client.parse <<-'GRAPHQL'
  mutation ($inputs: CreatePricedScheduleRequestInputs!) {
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
GRAPHQL

result = Client.query(
  CreatePricedScheduleRequestMutation,
  variables: {
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
      externalReferenceId: 'your_reference_id'# Typically your systems order#
    }
  }
)
pp result.data.to_h
