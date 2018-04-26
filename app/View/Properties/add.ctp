<div class="properties form">
<?php echo $this->Form->create('Property'); ?>
	<fieldset>
		<legend><?php echo __('Add Property'); ?></legend>
	<?php
		echo $this->Form->input('customer_id');
		echo $this->Form->input('p_name');
		echo $this->Form->input('p_address');
		echo $this->Form->input('p_city');
		echo $this->Form->input('p_state');
		echo $this->Form->input('p_zip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Properties'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
