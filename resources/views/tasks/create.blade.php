<div class="card">
    <div class="card-body">
        <h2>
          Create Tasks            
        </h2>
        <form method="post" action="/task">
            @csrf

            <div class="form-group">
                <label>
                    Name:
                </label>
                <input type="text" name="name" placeholder="" value="" required="required" class="form-control">
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
            <button type="submit" name="button" class="btn btn-orange">Create Task</button>
        </form>
    </div>
</div>