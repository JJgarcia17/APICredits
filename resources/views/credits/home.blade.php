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
    <div class="loader"></div>

    <div class="container vh-100 justify-content-center">

        <h2 class="text-center">CRUD CREDITS</h2>
        <button class="btn btn-outline-success"><i class="bi bi-file-earmark-plus-fill"></i></button>
        <table class="table crud_table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID Client</th>
                <th scope="col">Date</th>
                <th scope="col">Description</th>
                <th scope="col">amount</th>
                <th scope="col">acction</th>
              </tr>
            </thead>
            <tbody></tbody>
        </table>
        <nav class="links"></nav>
    </div>

    <template id="crud_template">
        <tr>
            <th class="id"scope="row"></th>
            <td class="client_id"></td>
            <td class="date"></td>
            <td class="description"></td>
            <td class="amount"></td>
            <td> 
                <button class="btn btn-outline-primary read"><i class="bi bi-eyeglasses"></i></button>
                <button class="btn btn-outline-warning edit"><i class="bi bi-pencil-square"></i></button>
                <button class="btn btn-outline-danger delete"><i class="bi bi-trash-fill"></i></button>
            </td>
        </tr>
    </template>
    <script src="{{asset('js/ajax.js')}}"></script>
</body>
</html>