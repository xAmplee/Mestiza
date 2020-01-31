$(document).ready(function () {
    $("#registrar").click(function (e) { 
        let nombre=$("#inputNombre").val();
        let apellidos=$("#inputApellidos").val();
        let email=$("#inputEmail").val();
        let pass=$("#inputPass").val();
        let dic1=$("#inputDireccion1").val();
        let dic2=$("#inputDireccion2").val();
        let city=$("#inputCity").val();
        let state=$("#inputState").val();
        let cp=$("#inputCP").val();
        let check=$("#inputCheck").val();

        if(nombre=="" || apellidos=="" || email=="" || pass=="" || dic1=="" || dic2=="" || city=="" || state=="" || cp==""|| check=="")
        {
            alert("asegurese de llenar los campos");
            //$("#inputApellidos").attr("style", "border-color: rgb(255, 0, 0)");
        }
        else
        {
            $.post("ajax_cliente/altaclientes.php", {
                nombre:nombre,
                apellidos:apellidos,
                email:email,
                pass:pass,
                dic1:dic1,
                dic2:dic2,
                city:city,
                state:state,
                cp:cp,
                check:check
            }).done(function(data){
                if(data==1)
                {
                    alert("Cliente Guardado con éxito");//,1);
                    //tabla();
                   //limpiar();
                }
                else if(data==2){
                    alert("El codigo postal tiene que ser solo numeros");//,2);
                }
                else{
                    alert("ERROR: no se logró guardar el cliente");//,2);
                }
            });
        }
        e.preventDefault();
    });
});