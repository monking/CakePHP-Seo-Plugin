<div class="seo_plugin">
	<?php echo $this->element('seo_view_head', array('plugin' => 'seo')); ?>
	<div class="seoMetaTags form">
	<?php echo $this->Form->create('SeoMetaTag');?>
		<fieldset>
			<legend><?php __('Admin Edit Seo Meta Tag'); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('SeoUri.uri');
			echo $this->Form->input('name');
			echo $this->Form->input('content');
			echo $this->Form->input('is_http_equiv');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('SeoMetaTag.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('SeoMetaTag.id'))); ?>
	</div>
	<div class="actions">
		<h3><?php __('Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('SeoMetaTag.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('SeoMetaTag.id'))); ?></li>
		</ul>
	</div>
</div>