const { GraphQLClient } = require("graphql-request")

const client = new GraphQLClient(
  // This is the Production URL. The sandbox URL would be:
  // https://sandbox.goloadup.com/partner_api/graphql
  'https://order.goloadup.com/partner_api/graphql',
  { headers: { "X-Access-Token": "<< INSERT YOUR API KEY >>" } }
)
module.exports = client
