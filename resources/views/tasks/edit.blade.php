<div class="card">
    <div class="card-body">
        <h2>
          Edit Tasks            
        </h2>
        <form method="post" action="/task/{{ $task->id }}">
            @csrf
              {{method_field('PUT')}}
              
            <div class="form-group">
                <label>
                    Name:
                </label>
                <input type="text" name="name" placeholder="" value="{{ $task->name }}" required="required" class="form-control">
            </div><br>

            <div class="form-group">
                <label>
                    Priority:
                </label>
                    <select name="priority">
                    <option value="urgent">Urgent</option>
                    <option value="low">low</option>
                    <option value="low">Low</option>
                </select>
            </div><br>   
            <button type="submit" name="button" class="btn btn-orange">Edit Task</button>
        </form>
    </div>
</div>