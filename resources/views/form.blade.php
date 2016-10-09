<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <style>
        </style>
    </head>
    <body>
        <div class="container">
            {!! Form::open(['url' => 'form','class'=>'form-horizontal']) !!}
            <div class='form-group'>
                <?php echo Form::label('number', 'Number',['class'=>'col-sm-2 control-label']); ?>
                <div class="col-sm-10">
                    <?php echo Form::number('number', 'value',['min' => 1, 'max' => 100, 'class'=>'form-control']); ?>
                </div>
            </div>

            <?php echo Form::submit('Send Number',array('class'=>'btn btn-primary pull-right')); ?>

            {!! Form::close() !!}
        </div>
    </body>
</html>
