<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>
<body>

<form method="POST" action="{{ url('/projects')}}"class="container" style="padding-top: 40px">
    @csrf

    <h1 class="heading">Create a Project</h1>

    <div class="field">
        <label class="label" for="title">Title</label>

        <div class="control">
            <input type="text" class="input" name="title" placeholder="Title">
        </div>
    </div>

    <div class="field">
        <label class="label" for="description">Description</label>

        <div class="control">
            <textarea name="description" class="textarea"></textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Create Project</button>
        </div>
    </div>
</form>

</body>
</html>
