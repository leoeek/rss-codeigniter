    <div class="modal fade" id="modalCategoria" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form action="<?=base_url('home/categoria-gravar')?>" method="post" name="formCategoria" id="formCategoria">
          <input type="hidden" name="id" id="id" value="">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Nova categoria</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="categoria" class="col-form-label">Nome:</label>
                  <input type="text" class="form-control" name="categoria" maxlength="45" title="Nome da categoria" required>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="submit" id="btCategoriaGravar" class="btn btn-primary">Gravar</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $(document).ready(function(){

      <?=isset($js) ? $js : ''?>

      });
    </script>
  </body>
</html>