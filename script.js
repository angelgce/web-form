function validarCorreo() {
    var array = [nombre, apellido1, apellido2, domicilio,
        cp, municipio, tel1, tel2
    ];
    var correos = [correo, correo2]
    var pase = true;
    array.forEach(element => {
        if (element.value == "") {
            pase = false;
        };
    });
    if (pase) {
        if (correo2.value == correo.value) {
            alert("Usuario registrado");
            array.forEach(element => {
                element.value = "";
            });
            correos.forEach(element => {
                element.style.borderColor = "gray";
                element.value = "";
            });

        } else {
            alert("Los correos no coinciden");
            correo2.style.borderColor = "red";
        }

    } else {
        alert("favor de rellenar todos los campos");
    }


}