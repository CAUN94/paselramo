@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Todos los cursos</div>

                <div class="panel-body">
                   <table class="table table-striped">
<tr><td>Curso</td><td>Carrera</td><td>Día</td><td>Horario</td><td>Ubicacion</td><td>Cupo</td><td>Borrar</td></tr>
@foreach ($cursos as $curso)

<tr>
<td><a href="/admin/cursos/update/{{$curso->id}}">{{$curso->curso}}</a></td>
<td>{{$curso->carrera}}</td>
<td>{{$curso->day}}</td>
<td>{{$curso->horario}}</td>
<td>{{$curso->ubicacion}}</td>
<td>{{$curso->cupos}}</td>
<td><a class="btn btn-danger btn-sm" href='/admin/cursos/borrar/{{$curso->id}}' role="button">Borrar</a></td>
</tr>
@endforeach
</table>

<br><hr>
<h3>Agregar Curso</h3>

<form method="POST" action="/admin/cursos/{{$Uni->id}}/agregar">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
	<textarea name="Curso" placeholder="Curso" class="form-control"></textarea>
	</div>

	<div class="form-group">
	<textarea name="Carrera" placeholder="Carrera" class="form-control"></textarea>
	</div>

	<div class="form-group">
	<textarea name="Horario" placeholder="Horario" class="form-control"></textarea>
	</div>

	<div class="form-group">
	<textarea name="Day" placeholder="Día" class="form-control"></textarea>
	</div>

	<div class="form-group">
	<textarea name="Ubicacion" placeholder="Ubicacion" class="form-control"></textarea>
	</div>

	<div class="form-group">
	<textarea name="Cupo" placeholder="Cupo" class="form-control"></textarea>
	</div>

	<div class="form-group">
	<button type="submit" class="btn btn-primary">Agregrar</button>
	</div>

</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
