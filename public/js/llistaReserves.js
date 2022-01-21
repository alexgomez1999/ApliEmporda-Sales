// Botó eliminar reserva ja feta
$(document).on('click', '.delete-btn', (e) => {

    const element = e.currentTarget
    const id = $(element).attr('codiSala');

    Swal.fire({
        title: "N'estàs segur?",
        text: `Segur que vols cancel·lar la reserva a la ${$(element).attr('nomSala')}?`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, cancel·lar!',
        cancelButtonText: 'No'
      }).then((result) => {
        if (result.isConfirmed) {

            $.ajax({
                url: 'index.php?r=deleteReservation',
                type: 'POST',
                data: { id },
                success: () => {
                    setTimeout('window.location.replace("index.php?r=llistaReserves")', 2500);
                }
            });

          Swal.fire(
            'Canel·lada!',
            `La teva reserva a la ${$(element).attr('nomSala')} ha sigut cancel·lada.`,
            'success'
          )
        }
      })
});
