<!DOCTYPE html>
<html>
    <head>
        <title>Data Pengguna</title>
    </head>

    <body>
        <h1>Data Pengguna</h1>

        <table border="1">
            <tr>
                <th>Id_Pengguna</th>
                <th>Email</th>
                <th>Password</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>

            @foreach($data as $item)
            <tr>
                <td>{{ $item->id_pengguna }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->password }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
            </tr>
            @endforeach

        </table>
        <a href="/logout"><i class="bi bi-box-arrow-right"></i> Logout</a>
    </body>
</html>