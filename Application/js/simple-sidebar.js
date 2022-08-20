function EliminarUsuario(usuarioID)
{

  if (confirm("Esta completamente seguro?") == true) {

    $.ajax({
      type: 'POST',
      url: '../Controller/UsuariosController.php',
      data: {
        "EliminarAjax" : "EliminarAjax",
        "usuarioID" : usuarioID
      },
      success: function(resultado)
      {
        location.reload();
      }
    });
    
  }    

}