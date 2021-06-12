<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>CRUD CREDITS</title>

</head>
<body>

    <div class="container vh-100 justify-content-center">
   
        <h2 class="text-center">CRUD CREDITS</h2>
        @include('common.success')
    @include('credits.create')
        <table class="table crud_table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID Client</th>
                <th scope="col">Date</th>
                <th scope="col">Description</th>
                <th scope="col">amount</th>
                <th class="text-center" scope="col">acction</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @if (isset($credits))
                @foreach ($credits as $credit)
                <tr>
                    <th class="id"scope="row">{{$credit->id}}</th>
                    <td class="client_id">{{$credit->client_id}}</td>
                    <td class="date">{{date('d/m/Y',strtotime($credit->date))}}</td>
                    <td class="description">{{$credit->description}}</td>
                    <td class="amount">{{number_format($credit->amount,2)}}</td>
                    <td> 
                        @include('credits.edit')
                        <form id="delete-form" action="{{route('destroy',$credit->id)}}" method="POST" class="d-none delete-form">
                            @method('DELETE')
                            @csrf
                            <td><button class="btn btn-outline-danger"type="submit"><i class="bi bi-trash-fill"></i></button></td>
                        </form>
                    </td>
                </tr>
                @endforeach 
                @endif
            </tbody>
        </table>
        {{$credits->links()}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('delete') == 'ok')
        <script>
            Swal.fire(
            '¡Removed!',
            'This credit was successfully removed',
            'success'
            )
        </script>
    @endif
    <script>
                // document.addEventListener("submit", (e) =>{
                    if(e.target.matches(".delete-form"))
                        {
                            e.preventDefault();
                            Swal.fire({
                                title: "You're sure?",
                                text: "This credit will be removed from the database",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, Delete!',
                                cancelButtonText: 'Cancel'
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    e.target.submit();
                                }
                            })
                        }
                });
            
    </script>
</body>
</html>