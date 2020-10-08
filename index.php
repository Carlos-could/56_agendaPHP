<?php include "inc/layout/header.php"; ?>

<header>
        <h1>Agenda de Contactos</h1>
</header>

<div class="container">

    <section class="sec_1">

        <div class="box_1 add_contact">
            <form id="contacto" action="#">
                <div class="campos">
                    <div class="campo">
                        <label for="nombre">Tu nombre</label>
                        <input type="text" id="nombre" placeholder="">
                    </div>
                    <div class="campo">
                        <label for="empresa">Tu empresa</label>
                        <input type="text" id="empresa" placeholder="">
                    </div>
                    <div class="campo">
                        <label for="telefono">Tu teléfono</label>
                        <input type="tel" id="telefono" placeholder="">
                    </div>
                </div>
                <div class="campo enviar">
                    <input type="submit" value="Añadir">
                </div>
            </form>
        </div>

        <div class="box_2 quan_contact">
            <h1>13 Contactos</h1>

        </div>
    </section>

    <section class="sec_2">
        <div class="box_3 list_contact">
            <h1>3</h1>
        </div>
    </section>

</div> <!-- Container -->
<?php include "inc/layout/footer.php"; ?>
