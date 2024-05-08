Formulario de creacion de clientes

<form action="{{url('/clientes')}}" method="post"enctype="mulripart/form-data" >
    @csrf
   
    @include('clientes.form');
    
    


    
    </form>