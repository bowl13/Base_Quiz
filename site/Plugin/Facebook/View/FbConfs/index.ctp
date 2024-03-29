<div class="fbConfs index">
	<h2><?php echo __('Fb Confs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('app_key'); ?></th>
			<th><?php echo $this->Paginator->sort('app_secret'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($fbConfs as $fbConf): ?>
	<tr>
		<td><?php echo h($fbConf['FbConf']['id']); ?>&nbsp;</td>
		<td><?php echo h($fbConf['FbConf']['app_key']); ?>&nbsp;</td>
		<td><?php echo h($fbConf['FbConf']['app_secret']); ?>&nbsp;</td>
		<td><?php echo h($fbConf['FbConf']['state']); ?>&nbsp;</td>
		<td><?php echo h($fbConf['FbConf']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fbConf['FbConf']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fbConf['FbConf']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fbConf['FbConf']['id']), array(), __('Are you sure you want to delete # %s?', $fbConf['FbConf']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Fb Conf'), array('action' => 'add')); ?></li>
	</ul>
</div>
