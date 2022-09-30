<br>
<h2 style=' text-align: center;'>Registrar Cliente</h2>
<form action=" {{url('/cliente')}} " method="POST">
    @csrf
    @include('cliente.form');
</form>
