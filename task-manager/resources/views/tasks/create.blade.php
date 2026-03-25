<h1>Create Task</h1>

<a href="/tasks">Back to Tasks</a>

<form action="/tasks" method="POST">
    @csrf

```
<div>
    <label>Title</label><br>
    <input type="text" name="title" required>
</div>

<br>

<div>
    <label>Description</label><br>
    <textarea name="description" rows="4"></textarea>
</div>

<br>

<button type="submit">Save Task</button>
```

</form>
