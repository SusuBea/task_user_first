@foreach ($tasks as $task)
    <form action = "/api/tasks/{{$task->id}}" method = "post">
    //a csrf tokenre szükség lesz élesben!
    //a REST API kérés típusa:    
    {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value = "{{$task->title}}">
        </div>
    </form>
@endforeach