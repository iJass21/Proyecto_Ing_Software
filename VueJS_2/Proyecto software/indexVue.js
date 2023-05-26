const app = new Vue({
    el: '#app',
    data: {
      nombre: '',
      pw: ''
    },
    methods: {
      validarUsuario(event) {
        // Evita que se envíe un formulario vacío
        event.preventDefault(); 
        // Aquí el usuario debiese guiarlo a la página correspondiente, agregar algo como usuario in ?....
        if (this.nombre === 'usuario') {
          // Usuario válido, redirigir a la página correspondiente
          window.location.href = 'perfil.html';
        } else {
          // Si no existe el usuario, arroja mensaje de error.
          alert('Credenciales inválidas');
        }
      }
    }
  });