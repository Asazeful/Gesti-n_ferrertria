const crearMateriales = async (material)=>{ //arrow functions
    
    //Estructura de peticion post al servidor con axios
    let resp = await axios.post("api/materiales/post", material, {
        headers: {
            "Content-Type": "application/json"
        }
    });
    return resp.data;
};

const getMateriales = async()=>{
    let resp = await axios.get("api/materiales/get");
    return resp.data;
}