<div>


    <table class="table mb-4">
        <thead>
        <tr>

            <th scope="col">Todo item</th>
            <th scope="col">Author</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>

        @foreach($todos as $todo)

            <tr>
                <td>{{$todo->item}}</td>
                <td>{{$todo->user->name}}</td>
                <td class="d-flex">
                    @if(Auth::user())
                        @if(Auth::user()->id == $todo->user_id)
                            <button type="submit" class="btn btn-success ms-1" wire:click="deleteTodo({{$todo->id}})">Finished</button>
                        @elseif(Auth::user()->role_id == 1)
                            <button type="submit" class="btn btn-success ms-1" wire:click="deleteTodo({{$todo->id}})" >Finished</button>
                        @endif
                @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
