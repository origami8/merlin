import api from "./API";
const baseUrl = "/api"

class TestdataServiceClass{

    async createEntry(payload = {}){
        try{
            const {data} = await api.post(baseUrl + "/createTestdata",payload)
            return data
        }catch (e) {
            await Promise.reject(e)
        }
    }
}

const TestdataService = new TestdataServiceClass()
export default TestdataService
