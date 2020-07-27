<div class="table-responsive">
    <table class="table" id="data-table">
        <thead>
            <tr>
                <th>Item Nombre</th>
                <th>Item Descripcion</th>
                <th>Categoria </th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->item_nombre }}</td>
            <td>{{ $item->item_descripcion }}</td>
            <td>{{ $item->categoria->categoria_nombre }}</td>
                <td>

                    {!! Form::open(['route' => ['items.destroy', $item->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('items.show', [$item->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('items.edit', [$item->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
  

</div>
