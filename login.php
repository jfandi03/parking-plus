<?php
include "plantilla.php";
?>

<div class="contenedor">
    <div class="contenedor-logo">

        <!-- Este es el logo-->
        <i class="fa-solid fa-square-parking" style="color: var(--rojoPrincipal); font-size: 4rem;"></i>


        <h1>
            <span class="gris-oscuro">Parking</span>
            <span class="rojo">Plus</span>
        </h1>
    </div>

    <div class="contenedor-formulario">
        <p style="text-align: center; color: var(--grisOscuro);">Ingreso al sistema</p>
        <form>
            <label style="font-weight: bold;">Usuario</label>
            <input type="text" id="usuario" />

            <label style="font-weight: bold;">Clave</label>
            <input type="password" id="clave" />

            <button onclick="ingresarAlSistema()">Ingresar</button>

        </form>
    </div>
    <p> &copy; Jonathan Fandiño - SystemPlus Popayán</p>
</div>
<script>


    function ingresarAlSistema() {
        const inputUsuario = document.getElementById("usuario");
        const inputClave = document.getElementById("clave");

        if (inputUsuario.value == ("Jonathan") && inputClave.value == 123456) {
            alert("Puedes ingresar al sistema");
        }
        else {
            alert("No estás autorizado para ingresar")
        }
    }
</script>
</body>


</html>