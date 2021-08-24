<?php $seccion='audios'; ?>

@extends('layoute_admi')

@section('contenido2')

<br><br><h1 style="margin-top:20px; text-align:center">Agregar Audio</h1><br>
<form method="POST" action="audio_administracion" enctype="multipart/form-data">

	<h2 style="width:88%; margin:15px 6%;">Audio</h2>

	<input type="file" name="AUDIO" style="width:85%; margin:15px 7.5%; outline: none;color:#000" class="form-control" autocomplete="off">

	<h2 style="width:88%; margin:15px 6%;">Foto</h2>

	<input type="file" name="FOTO" style="width:85%; margin:15px 7.5%; outline: none;color:#000" class="form-control" autocomplete="off">
	{{ csrf_field() }}
	<input type="text" name="TITULO" placeholder="Titulo" class="form-control fs-4" style="width:85%; margin:10px 7.5%;  border: none; border-bottom: 1px solid #fff; outline: none; background: #eee;color:#000" required="True"  autocomplete="off">

	<textarea cols="40" rows="7" placeholder="Descripci&oacute;n" class="form-control fs-4" name="DESCRIPCION" style="width:85%; margin:10px 7.5%;  border: none; border-bottom: 1px solid #fff; outline: none; background: #eee;color:#000"  required="True"></textarea>


	<br>
	<input type="submit" value="Registrar" class="btn btn-primary p-3 fs-4" style="color:#fff; width:30%; margin:0px 35%;">
	<br><br>
	
</form>
@endsection