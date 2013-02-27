<!-- File: /app/View/Users/index.ctp -->
<h1>Administracion de usuarios</h1>
<table>
	<?php echo $this->Html->link('Agregar User', array('controller' => 'users', 'action' => 'add')); ?>
	
	<tr>
		<th>Id</th>
		<th>Usuario</th>
		<th>Password</th>
		<th>ROL</th>
		<th>Acciones</th>
		<th>Creado</th>
		<th>Modificado</th>
	</tr>
	<!-- Here is where we loop through our $posts array, printing out post info -->
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user['User']['id']; ?></td>
		<td><?php echo $user['User']['username']; ?></td>
		<td><?php echo $user['User']['password']?>
		<td><?php echo $user['User']['role']?>
		<td>
		<?php echo $this->Form->postLink('Delete',
                array('action' => 'delete', $user['User']['id']),
                array('confirm' => 'Are you sure?'));?>
		<?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>
		</td>
		<td><?php echo $user['User']['created']; ?></td>
		<td><?php echo $user['User']['modified']; ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($user); ?>
</table>