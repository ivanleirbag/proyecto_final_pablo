// JS eliminar estado de pago

$(document).on("click", ".btnEliminarPago", function () {
    var id_pago = $(this).attr("id_pago_eliminar");
    Swal.fire({
      title: "¿Está seguro de eliminar el registro de pago?",
      text: "Si no lo está, puede cancelar la acción",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "Cancelar",
      confirmButtonText: "Sí, eliminar pago",
    }).then(function (result) {
      if (result.value) {
        window.location =
          $("#url").val() + "index.php?pagina=pagos&id_pago_eliminar=" + id_pago;
      }
    });
});