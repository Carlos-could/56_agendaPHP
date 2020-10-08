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

    <section class="sec_2 contactos">
        <div class="box_3 list_contact contenedor-contactos">
            <h2>Listado de contactos</h2>
            <input type="text" class="buscador" placeholder="Buscar contactos">
            <p class="total-contactos"> <span>2</span> Contactos</p>
            <div class="contenedor-tabla">
               <table id="listado-contactos">
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
                           <a class="btn-edtar" href="#">
                              <i class="fas fa-pen-square"></i>
                           </a>
                           <button data-id="1" type="button" class="btn-boorrar btn">
                              <i class="fas fa-trash-alt"></i>
                           </button>
                        </td>
                     </tr>
                     <tr>
                        <td>Carlos Moran</td>
                        <td>Mundo Red</td>
                        <td>015902293086</td>
                        <td>
                           <a class="btn-edtar" href="#">
                              <i class="fas fa-pen-square"></i>
                           </a>
                           <button data-id="1" type="button" class="btn-boorrar btn">
                              <i class="fas fa-trash-alt"></i>
                           </button>
                        </td>
                     </tr>
                     <tr>
                        <td>Carlos Moran</td>
                        <td>Mundo Red</td>
                        <td>015902293086</td>
                        <td>
                           <a class="btn-edtar" href="#">
                              <i class="fas fa-pen-square"></i>
                           </a>
                           <button data-id="1" type="button" class="btn-boorrar btn">
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
