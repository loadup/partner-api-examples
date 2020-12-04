require_relative "../utils/graphql_client"

CancelScheduleRequestMutation = Client.parse <<-'GRAPHQL'
  mutation ($inputs: CancelScheduleRequestInputs!) {
    cancelScheduleRequest(inputs: $inputs) {
      errorCode
    }
  }
GRAPHQL

result = Client.query(
  CancelScheduleRequestMutation,
  variables: {
    inputs: {
      scheduleRequestId: '<Insert Your Schedule Request ID>'
    }
  }
)
pp result.data.to_h

