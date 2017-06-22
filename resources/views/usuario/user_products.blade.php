<table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>  
                  <th>Address</th> 
                  <th>Type</th> 
                  <th>Register</th> 
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>