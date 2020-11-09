const { gql } = require("graphql-request")
const client = require("../utils/graphqlClient")

const query = gql`
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
`

client.request(
  query,
  { inputs: { status: "OPEN" } }
).then((data) => console.log(data))


