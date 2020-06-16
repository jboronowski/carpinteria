@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Almacen
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($almacen, ['route' => ['almacens.update', $almacen->id], 'method' => 'patch']) !!}

                        @include('almacens.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection