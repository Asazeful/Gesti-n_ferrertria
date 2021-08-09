const crearHerramienta = async (herramienta)=>{ //arrow functions
    
    //Estructura de peticion post al servidor con axios
    let resp = await axios.post("api/herramientas/post", herramienta, {
        headers: {
            "Content-Type": "application/json"
        }
    });
    return resp.data;
};

const getHerramientas = async()=>{
    let resp = await axios.get("api/herramientas/get");
    return resp.data;
}