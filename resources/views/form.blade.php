<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
        </style>
    </head>
    <body>
        {!! Form::open(['url' => 'form']) !!}
        <?php echo Form::label('number', 'Number'); ?>

        <?php echo Form::number('number', 'value'); ?>
<?php echo Form::submit('Click Me!'); ?>

        {!! Form::close() !!}
    </body>
</html>
