$('#deleta-modal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var id = button.data('customer');
    var modal = $(this);
    modal.find('.modal-title').text('Excluir Cliente #' + id);
    modal.find('#confirm').attr('href', 'delete.php?id=' + id);
  })
$('#edit-modal').on('show.bs.modal', function(event){
    var button = $(event.relatedTarget);
    var customer = button.data('json');
    var modal = $(this);
    modal.find('.modal-title').text('Editar Cliente #' + customer.id);
    document.querySelector("#id").value=customer.id;
    document.querySelector("#nome").value=customer.nome;
    document.querySelector("#cpf").value=customer.cpf;
    document.querySelector("#telefone").value=customer.telefone;
    /* modal.find('#confirm').attr('href', 'edit.php?id=' + id); */
})
const myModal = document.getElementById('myModal');
const myInput = document.getElementById('myInput');