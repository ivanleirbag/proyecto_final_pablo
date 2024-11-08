//    JS eliminar
$(document).on("click", ".btnEliminar", function () {

    let id_eliminar = $(this).attr("id_eliminar");
  
    Swal.fire({
      title: "Está seguro de eliminar el producto?",
      text: "Sino lo está puede cancelar la acción",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "Cancelar",
      confirmButtonText: "Si, eliminar producto",
    }).then(function (result) {
      if (result.value) {
        window.location =
          $("#url").val() + "index.php?pagina=productos&id_eliminar=" + id_eliminar;
      }
    });
  });