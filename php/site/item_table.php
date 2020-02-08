<!DOCTYPE html>
<html>
<body>
	<tr>
		<td>{recado}</td>
		<td>{nome}</td>
		<td>{descricao}</td>
		<td>{data}</td>
		<td><a href="inderecamento.php?class=Listagem_recado&method=select&id={id}"><img src="../../icons/editar.png" alt="icone de editar"></a></td>
		<td><a  data-toggle="modal" data-target="#ModalExclusao" data-whatever="{id}"><img src="../../icons/delete.png" alt="icone de excluir"></a></td>
		<!-- PASSANDO VALOR PARA MODAL DE EXCLUSÃO-->
	</tr>

	<!-- MODAL DE EXCLUSÃO DA LISTAGE DE RECADOS -->

	<div class="modal fade" id="ModalExclusao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Certeza da Exclusão das informações</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
			<form action="inderecamento.php?class=Recado&action=delete" method="POST">
			  <input type="hidden" name="codigo"> 
			  <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
			  <button type="submit" class="btn btn-success">Sim</button>
            </form>
            </div>
          </div>
        </div>
	</div>
	  
	<!-- FIM DE MODAL DE EXCLUSÃO DA LISTAGE DE RECADOS -->

<script src="../../js/jquey.js"></script>
<script src="../../js/bootstrap.js"></script>
<!-- PEGA O ID PARA MANDA A EXCLUSAO PELO POST -->
<script type="text/javascript">
$('#ModalExclusao').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-body input').val(recipient)
});

</script>

</body>
</html>

