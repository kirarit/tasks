<div class="card">
    <div class="card-body">
        <div class="row">
        @foreach($tasks as $task)

            <div class="col-md-10 offset-md-1">
                <h4>{{ $task->name }}</h4>
                <p>{{ $task->priority }}</p>
                <p><strong>Created:</strong> {{ $task->created_at->diffForHumans() }}</p>                
            </div> 
            <a href="/task/{{$task->id}}" class="btn btn-orange btn-sm">View</a>
            <a href="/task/{{$task->id}}/edit" class="btn btn-link btn-sm">Edit</a>    
  
        @endforeach
    </div>
</div>