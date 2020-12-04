const { gql } = require("graphql-request")
const client = require("../utils/graphqlClient")

const query = gql`
mutation cancelScheduleRequest($inputs: CancelScheduleRequestInputs!) {
  cancelScheduleRequest(inputs: $inputs) {
    errorCode
  }
}
`

client.request(
  query,
  {
    inputs: {
      scheduleRequestId: '<Insert Your Schedule Request ID>'
    }
  }
).then((data) => console.log(data))


