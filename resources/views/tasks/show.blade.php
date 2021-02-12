<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                dfsdj
                <h4>{{ $task->name }}</h4>
                <p>{{ $task->priority }}</p>
                <p><strong>Created:</strong> {{ $task->created_at->diffForHumans() }}</p>                
            </div> 
            <a href="/task/{{$task->id}}/edit" class="btn btn-link btn-sm">Edit</a>    

           <form method="POST" action="/task/{{ $task->id }}">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" value="Delete">
            </form>
    </div>
</div>