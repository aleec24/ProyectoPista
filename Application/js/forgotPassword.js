function OlvidoClave() {
  Swal.fire({
    title: "Digite su email",
    input: "text",
    inputAttributes: {
      autocapitalize: "off",
    },
    showCancelButton: true,
    confirmButtonText: "Resetear contraseña",
    showLoaderOnConfirm: true,
    preConfirm: (email) => {
      return $.ajax({
        type: "POST",
        url: "../Controller/LoginController.php",
        data: {
          ResetearClave: "ResetearClave",
          email: email,
        },
        success: function (resultado) {
          return true;
        },
      });
    },
    allowOutsideClick: () => false,
  }).then((result) => {
    if (result) {
      Swal.fire({
        title: `Se ha enviado un correo con su nueva contraseña.`,
      });
    }
  });
}
