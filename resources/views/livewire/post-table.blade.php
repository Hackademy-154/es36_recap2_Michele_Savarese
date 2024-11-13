<div>
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Contenuto</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>
                        <a href="{{ route('post.edit', compact('post')) }}" class="btn btn-success"> Modifica</a>
                        <button class="btn btn-danger" wire:click="deletePost({{ $post }})"
                        wire:confirm="Sicuro di voler eliminare questo post?"
                        >Elimina</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
