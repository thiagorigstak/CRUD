$('#deleta-modal').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var id = button.data('customer');
    
    var modal = $(this);
    modal.find('.modal-title').text('Excluir Cliente #' + id);
    modal.find('#confirm').attr('href', 'delete.php?id=' + id);
  })

const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})