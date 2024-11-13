<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-5 display-4">
                    Modifica: {{ $post->title }}
                </h1>
            </div>
        </div>

        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-8">
                <livewire:post-edit-form :post="$post"/>
            </div>
        </div>


    </div>


</x-layout>
