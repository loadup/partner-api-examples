require "graphql/client"
require "graphql/client/http"

# Configure GraphQL endpoint using the basic HTTP network adapter.
# Production: https://order.goloadup.com/partner_api/graphql
# Sandbox: https://sandbox.goloadup.com/partner_api/graphql

HTTP = ::GraphQL::Client::HTTP.new("<ENTER YOUR ENDPOINT HERE>") do
  def headers(_context)
    {
      "Accept" => "application/json",
      "Content-Type" => "application/json",
      "X-Access-Token" => "<ENTER YOUR API KEY HERE>"
    }
  end
end

# Fetch latest schema on init, this will make a network request
Schema = ::GraphQL::Client.load_schema(HTTP)

Client = ::GraphQL::Client.new(schema: Schema, execute: HTTP)
