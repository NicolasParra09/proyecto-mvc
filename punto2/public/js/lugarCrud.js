document.addEventListener("DOMContentLoaded", init);
const URL_API = 'http://localhost/pruebatecnica-softron/punto2/controllers/'

var lugares = [];

function init() {
    search()
}

async function search() {
    var url = URL_API + 'lugarApi.php';
    var response = await fetch(url, {
        "method": 'GET',
        "headers": {
            "Content-type": 'application/json'
        }
    })

    lugares = await response.json();
    
    html = '';

    for(tblLugar of lugares) {
        var row= ` <tr>
        <td>${tblLugar.id_lugar}</td>
        <td>${tblLugar.nombre_lug}</td>
        <td>
            <a  onclick="edit(${tblLugar.id_lugar})" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
            <a  onclick="remove(${tblLugar.id_lugar})" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Eliminar</a>
        </td>
    </tr>`
        html = html + row;
    }


document.querySelector('#tblLugar > tbody').outerHTML = html;
}

function edit(id_lugar) {
    var lugar = lugares.find(x => x.id_lugar == id_lugar)
    document.getElementById('id').value = lugar.id_lugar
    document.getElementById('lugar').value = lugar.nombre_lug
}

async function remove(id_lugar){
    respuesta = confirm('Estas segoro de Eliminarlo?');
    if(respuesta) {
        var url = URL_API + 'lugarApi.php?id=' + id_lugar;
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
    
        var data = {
            "id_lugar": document.getElementById('id').value,
            "nombre_lug": document.getElementById('lugar').value,
        }

        var id_lugar = document.getElementById('id').value
        if (id_lugar != ''){
            data.id_lugar = id_lugar
        }
    
        var url = URL_API + 'lugarApi.php';
        await fetch(url, {
            "method": id != '' ? 'PUT' : 'POST',
            "body": JSON.stringify(data),
            "headers": {
                "Content-type": 'application/json'
            }
        })
        window.location.reload();
    }

