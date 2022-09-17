<div>
    <table class="table table-striped shadow border border-light">
        <thead class="bg-info">
            <tr>
                <th>ID No</th>
                <th>Game Name</th>
                <th>Game Type</th>
                <th>Size</th>
                <th>Series</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr>
                    <td>{{ $game->id }}</td>
                    <td>{{ $game->game_name }}</td>
                    <td>{{ $game->game_type }}</td>
                    <td>{{ $game->size }}</td>
                    <td>{{ $game->series }}</td>
                    <td>
                        <a href="{{ url('edit', ['game' => $game->id]) }}" class="btn btn-primary" id="ic" title="Edit">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['game' => $game->id]) }}" class="btn btn-danger" id="ic" title="Delete">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>

</style>
