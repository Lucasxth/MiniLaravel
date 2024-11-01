<style>
    tr:nth-child(even) {
        background-color: #f8fdd6;
    }

    table:nth-child(odd) {
        background-color: #9d9d9d;
    }
</style>
<h1>Usuários</h1>

<table>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
    @endforeach
