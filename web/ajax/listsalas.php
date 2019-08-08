<?php 
require_once '../../core/class/class.php';
if (!Sessao::estaLogado()) {
	header('Location: ../index.php');
}
$lista = Lista::Salas();
?>
<table class="striped centered">
	<thead>
		<tr>
			<th>Nome</th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($lista as $item) { ?>
			<tr>
				<td><?php echo $item->Nome; ?></td>
			</tr>
		<?php  } ?>
	</tbody>
</table>