<div class="form-group {{$errors->has('title') ? 'has-error': ''}}">
    <?= Form::label('title','Title:')?>
    <?= Form::text('title',null,array('class'=>'form-control')); ?>
    <?= $errors->first('title','<span class="help-block">:message</span>') ?>
</div>
<div class="form-group">
    <?= Form::label('lyrics','Lyrics:')?>
    <?= Form::textarea('lyrics',null,array('class'=>'form-control')); ?>
</div>
<div class="form-group {{$errors->has('slug') ? 'has-error': ''}}">
    <?= Form::label('slug','Slug')?>
    <?= Form::text('slug',null,array('class'=>'form-control')); ?>
    <?= $errors->first('slug','<span class="help-block">:message</span>') ?>
</div>
<div class="form-group">
    <?= Form::submit('Save Song',array('class'=>'btn btn-primary')) ?>
</div>