<div class="col-md-3">
<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit client Data </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="alert alert-warning d-none" id="validationcpf">preencha o CPF corretamente</div>
                <form id="att" action="edit.php" method="POST">

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
                        <button type="submit" name="updatedata" class="btn btn-primary">Atualizar</button>
                    </div>
                </form>

            </div>
        </div>
</div>
</div>

<script> 
   document.querySelector("#att").addEventListener("submit",(e)=>{
    console.log(document.querySelector("#cpf").value);
    var cpf = document.querySelector("#cpf").value;
    if(isNaN(cpf)){
        //quando der errado\/
        e.preventDefault();
        document.querySelector("#validationcpf").classList.remove("d-none");   
    } else {
        // quando der certo \/
        document.querySelector("#validationcpf").classList.add("d-none");
        document.querySelector("#att").submit();
    } 
})
</script>