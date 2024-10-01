// public/js/menu.js

document.getElementById('crearMenuBtn').addEventListener('click', function() {
    $('#crearMenuModal').modal('show');
  });
  
  document.getElementById('guardarPlatillo').addEventListener('click', function() {
    var nombre = document.getElementById('nombre').value;
    var descripcion = document.getElementById('descripcion').value;
    var precio = document.getElementById('precio').value;
  
    if(nombre && descripcion && precio) {
      alert("Platillo guardado exitosamente");
      $('#crearMenuModal').modal('hide');
    } else {
      alert("Por favor, completa todos los campos.");
    }
  });
  