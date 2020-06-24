<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{{ route('categorias.index') }}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>

<li class="{{ Request::is('items*') ? 'active' : '' }}">
    <a href="{{ route('items.index') }}"><i class="fa fa-edit"></i><span>Items</span></a>
</li>


<li class="{{ Request::is('depositos*') ? 'active' : '' }}">
    <a href="{{ route('depositos.index') }}"><i class="fa fa-edit"></i><span>Depositos</span></a>
</li>


