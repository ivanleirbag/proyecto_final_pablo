//    JS eliminar plan de entrenamiento

$(document).on("click", ".btnEliminarPlan", function () {
    var id_plan = $(this).attr("id_plan_eliminar");
    Swal.fire({
      title: "Está seguro de eliminar el plan de entrenamiento?",
      text: "Si no lo está puede cancelar la acción",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "Cancelar",
      confirmButtonText: "Si, eliminar plan",
    }).then(function (result) {
      if (result.value) {
        window.location =
          $("#url").val() + "index.php?pagina=planes_entrenamiento&id_plan_eliminar=" + id_plan;
      }
    });
  });