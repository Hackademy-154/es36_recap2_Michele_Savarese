<form wire:submit="editPost" class="shadow p-5 bg-white">
    {{-- @dump($post) --}}
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <div class="mb-3">
        <label for="title" class="form-label">
            Titolo
        </label>
        <input value="{{$post->title}}" type="text" class="form-control @error('title') is-invalid

        @enderror"  wire:model.blur="title" id="title">
        {{-- {{$title}} --}}
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">
            Contenuto
        </label>
        <textarea class="form-control @error('content') is-invalid

        @enderror" id="content" cols="30" rows="10" wire:model.blur="content">{{$post->content}}</textarea>
        {{-- {{$content}} --}}

    </div>
    <div class="mt-3 text-center">
        <button type="submit" class="btn btn-info">
            Modifica Post
        </button>
    </div>
</form>
