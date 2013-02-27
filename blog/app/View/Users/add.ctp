<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Agregar Usuario'); ?></legend>
        <?php 
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('role', array('options' => array('admin' => 'Admin', 'author' => 'Author')));
    	?>
    	<?php echo $this->Form->submit('Submit',  
    		array('after' => $this->Form->postButton('Cancel', array('action' => 'index'))));?>
    
     </fieldset>                   
 <?php echo $this->Form->end();?>
</div>