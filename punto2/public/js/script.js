document.addEventListener("DOMContentLoaded", init);
const URL_API = 'http://localhost/pruebatecnica-softron/punto2/'

var personajes = [];

function init() {
    search()
}

async function search() {
    var url = URL_API + 'personajeApi.php';
    var response = await fetch(url, {
        "method": 'GET',
        "headers": {
            "Content-type": 'application/json'
        }
    })

    personajes = await response.json();
    
    html = '';

    for(tblPersonaje of personajes) {
        var row= ` <tr>
        <td>${tblPersonaje.id_personaje}</td>
        <td>${tblPersonaje.nombre_per}</td>
        <td>${tblPersonaje.status_per}</td>
        <td>${tblPersonaje.direccion_per}</td>
        <td>
            <a  onclick="edit(${tblPersonaje.id_personaje})" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
            <a  onclick="remove(${tblPersonaje.id_personaje})" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Eliminar</a>
        </td>
    </tr>`
        html = html + row;
    }


document.querySelector('#tblPersonaje > tbody').outerHTML = html;
}

function edit(id_personaje) {
    var personaje = personajes.find(x => x.id_personaje == id_personaje)
    document.getElementById('id').value = personaje.id_personaje
    document.getElementById('nombre').value = personaje.nombre_per
    document.getElementById('status').value = personaje.status_per
    document.getElementById('direccion').value = personaje.direccion_per
}

async function remove(id_personaje){
    respuesta = confirm('Estas segoro de Eliminarlo?');
    if(respuesta) {
        var url = URL_API + 'personajeApi.php?id=' + id_personaje;
        await fetch(url, {
            "method": 'DELETE',
            "headers": {
                "Content-type": 'application/json'
            }
        })
        window.location.reload();
    }
}


async function save(){
    //id_personaje, $datos->nombre_per, $datos->status_per, $datos->direccion_per
        var data = {
            "id_personaje": document.getElementById('id').value,
            "nombre_per": document.getElementById('nombre').value,
            "status_per": document.getElementById('status').value,
            "direccion_per": document.getElementById('direccion').value
        }

        var id_personaje = document.getElementById('id').value
        if (id_personaje != ''){
            data.id_personaje = id_personaje
        }
    
        var url = URL_API + 'personajeApi.php';
        await fetch(url, {
            "method": id != '' ? 'PUT' : 'POST',
            "body": JSON.stringify(data),
            "headers": {
                "Content-type": 'application/json'
            }
        })
        window.location.reload();
    }

