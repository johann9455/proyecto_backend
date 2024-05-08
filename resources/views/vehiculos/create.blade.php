Formulario de creacion de clientes
<form action="{{url('/vehiculos')}}" method="post"enctype="mulripart/form-data" >
    @csrf
    @include('vehiculos.form')
    
    


    
    </form>