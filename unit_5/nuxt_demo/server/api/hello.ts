export default defineEventHandler(async (event) => {
  const query = getQuery(event)
  console.log(JSON.stringify(query, null, 2))
  await new Promise(resolve => setTimeout(resolve, 1000))
  return {
    name: query.name
  }
})
