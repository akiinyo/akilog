<h1>Add Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '10'));
echo $this->Form->submit('Save Post');
echo $this->Form->end();
?>
