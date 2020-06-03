{!! Form::open(['route' => ['admin.countries.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('admin.countries.show', $id) }}" class='btn btn-success'>
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('admin.countries.edit', $id) }}" class='btn btn-info'>
        <i class="fa fa-edit"></i>
    </a>
    {!! Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger',
        'onclick' => 'return confirm("'.__('crud.are_you_sure').'")'
    ]) !!}
</div>
{!! Form::close() !!}
