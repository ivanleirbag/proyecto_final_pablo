//    JS eliminar estado de membresia

$(document).on("click", ".btnEliminarEstadoMemb", function () {
  var id_estado_memb = $(this).attr("id_estado_memb_eliminar");
  Swal.fire({
    title: "Está seguro de eliminar el estado de membresía?",
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
        $("#url").val() + "index.php?pagina=estados_memb&id_estado_memb_eliminar=" + id_estado_memb;
    }
  });
});