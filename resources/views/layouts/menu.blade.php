<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{!! route('categorias.index') !!}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>

<li class="{{ Request::is('almacens*') ? 'active' : '' }}">
    <a href="{!! route('almacens.index') !!}"><i class="fa fa-edit"></i><span>Almacens</span></a>
</li>

