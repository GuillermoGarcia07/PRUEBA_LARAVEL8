<br>
<h2 style=' text-align: center;'> Editar Cliente</h2>
<form action=" {{url('/cliente/'.$cliente->id)}} " method="POST">
    @csrf
    {{ method_field('PATCH') }}
    @include('cliente.form');
</form>
