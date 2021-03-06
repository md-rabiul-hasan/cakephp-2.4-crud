<div class="posts index">
    <h2><?php echo __('Posts'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('title'); ?></th>
            <th><?php echo $this->Paginator->sort('body'); ?></th>
            <th><?php echo $this->Paginator->sort('funnypost'); ?></th>
            <th><?php echo $this->Paginator->sort('seriouspost'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        
        <?php foreach ($posts as $post): ?>
            <tr>
                <td><?php echo h($post['Post']['id']); ?>&nbsp;</td>
                <td><?php echo h($post['Post']['title']); ?>&nbsp;</td>
                <td><?php echo h($post['Post']['body']); ?>&nbsp;</td>
                <td><?php echo h($post['Post']['funnypost']); ?>&nbsp;</td>
                <td><?php echo h($post['Post']['seriouspost']); ?>&nbsp;</td>
                <td><?php echo h($post['Post']['created']); ?>&nbsp;</td>
                <td><?php echo h($post['Post']['modified']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Post']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
                </td>
            </tr>

        <?php endforeach; ?>
	</table>
</div>