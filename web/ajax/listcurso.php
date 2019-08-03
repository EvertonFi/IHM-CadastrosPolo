<?php 
require_once '../../core/class/class.php';
if (!Sessao::estaLogado()) {
	header('Location: ../index.php');
}
$lista = Lista::Curso();
?>
<table class="striped centered">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Instituição</th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($lista as $item) { ?>
			<tr>
				<td><?php echo $item->nome; ?></td>
				<td><?php echo $item->nome_instituicao; ?></td>
			</tr>
		<?php  } ?>
	</tbody>
</table>