@extends('layouts.app')
@section('content')
    <section class="" >
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card rounded-3">
                        <div class="card-body p-4">

                            <h4 class="text-center my-3 pb-3">Your To Do's for today</h4>
                            <livewire:add-todos/>
                            <livewire:todo-form/>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
