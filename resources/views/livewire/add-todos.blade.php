<div>
    <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
        <div class="col-12">
            <div class="form-outline">
@if(Auth::user())

                    <input type="text" id="form1" class="form-control" placeholder="Type todo+ press enter" wire:model="item" wire:keydown.enter="addTodo">
    @else
                    <input type="text" id="form1" class="form-control" placeholder="Type todo+ press enter" wire:keydown.enter="register">
    @endif
{{--                {{$item}}--}}


            </div>
        </div>

    </form></div>
