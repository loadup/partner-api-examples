require_relative "../utils/graphql_client"

ScheduleRequestsQuery = Client.parse <<-'GRAPHQL'
  query($inputs: ScheduleRequestsInputs!){
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
GRAPHQL

result = Client.query(
  ScheduleRequestsQuery,
  variables: { inputs: { status: "OPEN" } }
)
pp result.data.to_h

