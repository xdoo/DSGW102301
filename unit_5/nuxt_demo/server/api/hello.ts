export default defineEventHandler(async (event) => {
  const query = getQuery(event)
  console.log(JSON.stringify(query, null, 2))
  return {
    name: query.name
  }
})
