//    JS eliminar estado de pago

$(document).on("click", ".btnEliminarEstadoPago", function () {
    var id_estado_pago = $(this).attr("id_estado_pago_eliminar");
    Swal.fire({
      title: "Está seguro de eliminar el estado de pago?",
      text: "Si no lo está puede cancelar la acción",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "Cancelar",
      confirmButtonText: "Si, eliminar estado",
    }).then(function (result) {
      if (result.value) {
        window.location =
          $("#url").val() + "index.php?pagina=estados_pago&id_estado_pago_eliminar=" + id_estado_pago;
      }
    });
  });