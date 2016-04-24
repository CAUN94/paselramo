@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Alumnos que quieren {{$estado}} un ramo</div>

                <div class="panel-body">
                   



 <table class="table table-striped">
 <tr> <td>Nombre</td><td>Universidad</td><td>Carrera</td><td>Ramo</td><td>horario</td><td>Mail</td><td>Telefono</td><td>Borrar</td></tr>


@foreach($Curso as $C)
@foreach($C->inscritos as $ins)

@if ($ins->Solicitud == $estado)

 <tr> 
 <td>{{$ins->Nombre}}</td>
 <td>{{$C->Uni->Nombre}}</td>
 <td>{{$C->carrera}}</td>
 <td>{{$C->curso}}</td>
 <td>{{$C->horario}}<td>
 <td>{{$ins->Mail}}</td>
 <td>{{$ins->Telefono}}</td>
 <td><a class="btn btn-danger" href="/admin/alumnos/borrar/{{$ins->id}}" role="button">Borrar</a></td>
 </tr>

 @endif


@endforeach

@endforeach

</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


