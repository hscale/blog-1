<h2>Some form...</h2>

<?php
echo Form::open(array('action' => array('TestsController@update', $data['_id'])));
echo Form::label('email', 'E-Mail Address: ');
echo Form::text('email', $data['email'] != '' ? $data['email'] : 'email@example.com');
echo Form::submit('Submit');
