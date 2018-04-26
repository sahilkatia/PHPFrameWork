<div class="properties view">
<h2><?php echo __('Property'); ?></h2>
	<dl>
		<dt><?php echo __('Property No'); ?></dt>
		<dd>
			<?php echo h($property['Property']['property_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($property['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $property['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P Name'); ?></dt>
		<dd>
			<?php echo h($property['Property']['p_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P Address'); ?></dt>
		<dd>
			<?php echo h($property['Property']['p_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P City'); ?></dt>
		<dd>
			<?php echo h($property['Property']['p_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P State'); ?></dt>
		<dd>
			<?php echo h($property['Property']['p_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P Zip'); ?></dt>
		<dd>
			<?php echo h($property['Property']['p_zip']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Property'), array('action' => 'edit', $property['Property']['property_no'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Property'), array('action' => 'delete', $property['Property']['property_no']), array(), __('Are you sure you want to delete # %s?', $property['Property']['property_no'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
