<div class="col-md-3">
    <div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit client Data </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="alert alert-warning d-none" id="validationcpf">preencha o CPF corretamente</div>
                <form id="att" action="" method="POST">

                    <div class="modal-body">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label> Nome </label>
                            <input required type="text" name="nome" id="nome" maxlength="50" class="form-control">
                        </div>

                        <div class="form-group">
                            <label> CPF </label>
                            <input required type="text" name="cpf" id="cpf" maxlength="11" minlength="11" class="form-control">
                        </div>

                        <div class="form-group">
                            <label> telefone </label>
                            <input type="text" name="telefone" id="telefone" maxlength="11" minlength="11" class="form-control">
                        </div>
                        </input>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" name="updatedata" id="updatedata" class="btn btn-primary">Atualizar</button>
                        </div>
                </form>

            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="<?php echo BaseURL; ?>js/jquery-3.6.0.min.js"><\/script>')
</script>
<script src="../js/jquery-3.6.0.js"></script>

<script>
    /*     document.querySelector("#att").addEventListener("click", "#updatedata"(e) => {
        e.preventDefault();
        alert(cpf);
        console.log(document.querySelector("#cpf").value);
        var cpf = document.querySelector("#cpf").value;
        if (isNaN(cpf)) {
            //quando der errado\/
            e.preventDefault();
            document.querySelector("#validationcpf").classList.remove("d-none");
        } else {
            // quando der certo \/
            document.querySelector("#validationcpf").classList.add("d-none");
            document.querySelector("#att").submit();
        }
    }); */
</script>

<script>
    $("#edit-modal").on("submit", "#att", function(evento) {
        var data = $("#att").serialize();
        var cpf = $("#cpf").val();
        evento.preventDefault();
        //alert(cpf);
        if (!isNaN(cpf)) {
            $.ajax({
                data: data,
                type: "POST",
                url: "edit.php",
                success: function(dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 200) {
                        $('#edit-modal').modal('hide');
                        //alert('Data updated successfully !');
                        location.reload();
                    } else {
                        alert(dataResult);
                    }
                },
            });
        } else {
            evento.preventDefault();
            $("#validationcpf").removeClass("d-none")
        }

        //evento.preventDefault();
        //alert("data update succesfully!");
    });
</script>