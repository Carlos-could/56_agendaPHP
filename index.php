<?php include "inc/layout/header.php"; ?>

<header>
        <h1>Agenda de Contactos</h1>
</header>

<div class="container">

    <section class="sec_1">

        <div class="box_1 add_contact">
            <form id="contacto" action="#">
                <legend></legend>
                <?php include "inc/layout/formulario.php"; ?>
            </form>
        </div>

        <div class="box_2 quan_contact">
            <p class="total-contactos"> <span>13</span> Contactos</p>

        </div>
    </section>

    <section class="sec_2 contactos">
        <div class="box_3 list_contact contenedor-contactos">
            <h2>Listado de contactos</h2>
            <input type="text" class="buscador" placeholder="Buscar contactos">


            <div class="contenedor-tabla">
               <table id="listado-contactos" class="listado-contactos">
                  <thead>
                     <tr>
                        <th>Nombre</th>
                        <th>Empresa</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Carlos Moran</td>
                        <td>Mundo Red</td>
                        <td>015902293086</td>
                        <td>
                           <a class="btn-editar btn" href="editar.php?id=1">
                              <i class="fas fa-pen-square"></i>
                           </a>
                           <button data-id="1" type="button" class="btn-borrar btn">
                              <i class="fas fa-trash-alt"></i>
                           </button>
                        </td>
                     </tr>
                     <tr>
                        <td>Carlos Moran</td>
                        <td>Mundo Red</td>
                        <td>015902293086</td>
                        <td>
                           <a class="btn-editar btn" href="editar.php?id=1">
                              <i class="fas fa-pen-square"></i>
                           </a>
                           <button data-id="1" type="button" class="btn-borrar btn">
                              <i class="fas fa-trash-alt"></i>
                           </button>
                        </td>
                     </tr>
                     <tr>
                        <td>Carlos Moran</td>
                        <td>Mundo Red</td>
                        <td>015902293086</td>
                        <td>
                           <a class="btn-editar btn" href="editar.php?id=1">
                              <i class="fas fa-pen-square"></i>
                           </a>
                           <button data-id="1" type="button" class="btn-borrar btn">
                              <i class="fas fa-trash-alt"></i>
                           </button>
                        </td>
                     </tr>

                  </tbody>
               </table>
            </div>
        </div>
    </section>

</div> <!-- Container -->
<?php include "inc/layout/footer.php"; ?>
