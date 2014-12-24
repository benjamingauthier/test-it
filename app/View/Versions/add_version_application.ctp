<div class="versions form">
    <?php echo $this->Form->create('Version'); ?>
    <fieldset>
        <legend><?php echo __('Add Version'); ?></legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('description');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>

