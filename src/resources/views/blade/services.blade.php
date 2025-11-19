@extends('_layouts.base')
@section('title', 'Servicios')
@section('header')
    <h1>Servicios</h1>
@endsection
@section('content')
<p>Formulario de servicios</p>
    <x-card title="Servicio 1" image="assets/images/imagen1.webp">
        <p>Descripción breve del Servicio 1</p>
    </x-card>

    <x-card title="Servicio 2" image="assets/images/imagen2.jpg">
        <p>Descripción breve del Servicio 2</p>
    </x-card>

    <x-card title="Servicio 3" image="assets/images/imagen3.jpg">
        <p>Descripción breve del Servicio 3</p>
    </x-card>
@endsection