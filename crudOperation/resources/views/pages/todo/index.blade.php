@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center" >
            <h1 class="page-title">Todo List</h1>
        </div>
            <div class="col-lg-12 mt-5">
                <form action="{{route('todo.store')}}" method="post">
                    @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Enter task" aria-label="default input example">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </div>
            </form>
            </div>
<div class="col-lg-12 mt-5">
    <div class="">
        <table class="table table-striped">
            <thead class="table-primary">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Task</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
                <tbody>
                    @foreach ($tasks as $key=>$task)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$task->name}}</td>
                        <td>
                           @if ($task->done==0)
                           <span>Not Completed</span>
                           @else
                           <span>Completed</span>
                           @endif
                        </td>
                        <td>
                            <a href="{{route('todo.delete',$task->id)}}" class="btn btn-danger"><i class="far fa-trash-alt" ></i></a>
                            <a href="{{route('todo.done',$task->id)}}" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a>
                        </td>
                      </tr>
                    @endforeach

                </tbody>
          </table>
    </div>
</div>
    </div>
</div>

@endsection



