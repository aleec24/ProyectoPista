function OlvidoClave() {
  Swal.fire({
    color: "#fff",
    background: "#252525",
    confirmButtonColor: "#AF0404",
    cancelButtonColor: "#414141",
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
    if (result.isConfirmed) {
      Swal.fire({
        title: `Se ha enviado un correo con su nueva contraseña.`,
        background: "#252525",
        color: "#fff",
        confirmButtonColor: "#AF0404",
      });
    }
  });
}
