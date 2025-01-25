export async function getProductDetailApi(id) {
    try {        
        const res = await axios.get(`/api/product/${id}`)
        return res
    } catch (error) {
        return error
    }
}

