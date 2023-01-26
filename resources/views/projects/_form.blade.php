@csrf

<div class="form-group">
    <label for="title"></label>
    <input class="form-control bg-light shadow-sm border-0"
        id="title"
        type="text"
        name="title"
        placeholder="Titulo del proyecto"
        value="{{ old('title' ,$project->title) }}">
</div>
<div class="form-group">
    <label for="url"></label>
    <input class="form-control bg-light shadow-sm border-0"
        id="url"
        type="text"
        name="url"
        placeholder="Url del proyecto"
        value="{{ old('url', $project->url) }}">
</div>
<div class="form-group">
    <label for="description"></label>
    <textarea class="form-control bg-light shadow-sm border-0"
        id="description"
        name="description"
        placeholder="Mensaje... ">
        {{ old('description', $project-> description) }}
    </textarea>
    <br>
</div>

<button class="btn btn-primary btn-lg btn-block">
    {{ $btnText }}
</button>
<a class="btn btn-link btn-block" href="{{ route('projects.index')}} ">Cancelar</a>

