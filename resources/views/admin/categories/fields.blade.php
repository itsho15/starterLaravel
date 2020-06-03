<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', trans('backend.Name en')) !!}
    {!! Form::text('name', (isset($category) && $category->getTranslation('name','en')) ? $category->getTranslation('name','en') : null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('name', trans('backend.Name ar')) !!}
    {!! Form::text('name_ar',(isset($category) && $category->getTranslation('name','ar')) ? $category->getTranslation('name','ar') : null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', trans('backend.image')) !!}
    {!! Form::file('image') !!}
    @if(isset($category) && $category->image)
    <img src="{{ Storage::url($category->image) }}" class="card-img-top img-responsive" alt="{{ $category->image }}">
    @endif
</div>
<div class="clearfix"></div>

<!-- Parent Field -->
<div class="clearfix"></div>
<div class="col-md-12">
    {!! Form::label('name', trans('backend.Parent Category')) !!}
    <div id="jstree" style="direction: ltr"></div>
    <input type="hidden" name="parent_id" class="parent_id">
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(trans('backend.Save'), ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.categories.index') !!}" class="btn btn-default">@lang('backend.Cancel')</a>
</div>
