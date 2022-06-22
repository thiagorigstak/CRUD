$('#deleta-modal').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var id = button.data('customer');
    
    var modal = $(this);
    modal.find('.modal-title').text('Excluir Cliente #' + id);
    modal.find('#confirm').attr('href', 'delete.php?id=' + id);
  })


//$('#add-modal').on('show.bs.modal', function (event) {
//  var button = $(event.relatedTarget);
//  var customer = button.data('customer');
//  
//  var modal = $(this);
//  modal.find('.modal-title').text('Adicionar cliente');
//  modal.find('#confirm').attr('href', 'addmodal.php?customer=' + customer);
//})// algo errado aqui /\

$('#add-modal').on('show.bs.modal', function (event) {
  // get information to update quickly to modal view as loading begins
  var opener=event.relatedTarget;//this holds the element who called the modal

   //we get details from attributes
  var customer=$(opener).attr('customer');

//set what we got to our form
  $('#confirm').find('[customer]').val(customer);
});


const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})