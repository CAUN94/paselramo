@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Modificar Curso</div>

                <div class="panel-body">
                    <h3>Modificar Curso {{$Curso->curso}}</h3>

<form method="POST" action="/admin/cursos/update/{{$Curso->id}}/edit">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div style="display: none" class="form-group">
	<textarea name="Uni" placeholder="Curso" class="form-control">{{$Curso->uni_id}}</textarea>
	</div>
	<div class="form-group">
	<textarea name="Curso" placeholder="Curso" class="form-control">{{$Curso->curso}}</textarea>
	</div>

	<div class="form-group">
	<textarea name="Carrera" placeholder="Carrera" class="form-control">{{$Curso->carrera}}</textarea>
	</div>

	<div class="form-group">
	<textarea name="Horario" placeholder="Horario" class="form-control">{{$Curso->horario}}</textarea>
	</div>

	<div class="form-group">
	<textarea name="Day" placeholder="Día" class="form-control">{{$Curso->day}}</textarea>
	</div>

	<div class="form-group">
	<textarea name="Ubicacion" placeholder="Ubicacion" class="form-control">{{$Curso->ubicacion}}</textarea>
	</div>

	<div class="form-group">
	<textarea name="Cupo" placeholder="Cupo" class="form-control">{{$Curso->cupos}}</textarea>
	</div>

	<div class="form-group">
	<button type="submit" class="btn btn-primary">Modificar</button>
	</div>

</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection