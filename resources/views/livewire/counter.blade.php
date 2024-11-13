    {{-- Care about people's approval and you will be their prisoner. --}}
    {{-- <div class="container-fluid"> --}}
    <div class="row justify-content-center">
        <div class="col-12 col-md-2 text-center">
            <h2 id="count">{{ $count }}</h2>
        </div>

        <div class="col-12 col-md-2 text-center">
            <button class="btn btn-primary" id="increment" wire:click="increment">
                +
            </button>
            <button class="btn btn-primary" id="decrement" wire:click="decrement">
                -
            </button>
        </div>

        <div class="col-12 col-md-2 text-center">
            <label for="" class="form-label">
                Seleziona un numero da sommare:
            </label>
            <input wire:model="inputNumber" type="text" class="form-control">
            {{-- @dump($inputNumber) --}}
            <button class="btn btn-primary" id="incrementbyInput" wire:click="incrementbyInput">
                +N
            </button>
        </div>

        <div class="col-12 col-md-2 text-center">
            <label for="" class="form-label">
                Seleziona un numero da sottrarre:
            </label>
            <input wire:model.live="DinputNumber" type="text" class="form-control">
            {{-- @dump($inputNumber) --}}
            <button class="btn btn-primary" id="decrementbyInput" wire:click="decrementbyInput">
                -N
            </button>
        </div>


    </div>
    {{-- </div> --}}
