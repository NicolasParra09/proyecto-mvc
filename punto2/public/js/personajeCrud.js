
listarPersonajes();
function listarPersonajes() {
    fetch("../controllers/personaje/listar.php", {
        method: "POST"
    }).then(response => response.text()).then(response => {
        tbPersonajes.innerHTML = response;
    })
}


registrar.addEventListener("click", () => {
    let data = Object.fromEntries(new FormData(frmPersonaje));
  
    $.ajax({
      type: "POST",
      url: "../controllers/personaje/registrar.php",
      data: data,
      success: function(response) {
        console.log(response);
        if (response == "ok") {
          Swal.fire({
            icon: "success",
            title: "Registrado",
            showConfirmButton: false,
            timer: 1500
          });
          frmPersonaje.reset();
          listarPersonajes();
        } else {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text:
              "Error: Ya existe una fila con los mismos valores.",
          });
        }
      }
    });
  });
  
  function Eliminar(id){
    Swal.fire({
        title: 'Estas seguro de Eliminar?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar!',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
          fetch("../controllers/personaje/eliminar.php", {
            method: "DELETE",
            body: id
          }).then(response => response.text()).then(response => {
            if (response == "ok"){
                listarPersonajes();
                Swal.fire({
                    icon: "success",
                    title: "Eliminado",
                    showConfirmButton: false,
                    timer: 800
                  });
            }
          })

        }
      })
  }

function Editar(id){
    fetch("../controllers/personaje/editar.php", {
        method: "POST",
        body: id
    }).then(response => response.json()).then(response => {
        console.log(response);
        idPersonaje_edit.value = response.id_personaje;
        nombre_edit.value = response.nombre_per;
        estado_edit.value = response.status_per;
        direccion_edit.value = response.direccion_per;
    })
}

actualizar.addEventListener("click", () => {
  let data = Object.fromEntries(new FormData(frmEditPersonaje));

  $.ajax({
    type: "POST",
    url: "../controllers/personaje/actualizar.php",
    data: data,
    success: function(response) {
      console.log(response);
      if (response == "ok") {
        Swal.fire({
          icon: "success",
          title: "Modificado",
          showConfirmButton: false,
          timer: 1500
        });
        $('#ModalEdit').modal('hide');
        listarPersonajes();
      } else {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text:
            "Error: No se ha Modicado.",
        });
      }
    }
  });
});
