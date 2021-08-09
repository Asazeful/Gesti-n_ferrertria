const crearAdmin = async (admin)=>{ //arrow functions
    
    //Estructura de peticion post al servidor con axios
    let resp = await axios.post("api/admins/post", admin, {
        headers: {
            "Content-Type": "application/json"
        }
    });
    return resp.data;
};

const getAdmins = async()=>{
    let resp = await axios.get("api/admins/get");
    return resp.data;
}