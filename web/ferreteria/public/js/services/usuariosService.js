const crearUsuario = async (usuario)=>{ //arrow functions
    
    //Estructura de peticion post al servidor con axios
    let resp = await axios.post("api/usuarios/post", usuario, {
        headers: {
            "Content-Type": "application/json"
        }
    });
    return resp.data;
};

const getUsuarios = async()=>{
    let resp = await axios.get("api/usuarios/get");
    return resp.data;
}