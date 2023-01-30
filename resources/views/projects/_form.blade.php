@csrf

@if ($project->image)
    <img class="card-img-top mb-2" src="/storage/{{ $project->image }}" alt="{{ $project->title }}">
@endif

<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
    </div>
    <div class="custom-file">
      <input name="image" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon02">
    </div>
</div>

<div class="form-group">
    <label for="category_id">Categoría del proyecto</label>
    <select
        name="category_id"
        id="category_id"
        class="form-control border-0 bg-light shadow-sm">
        <option value=""> Seleccione una categoría</option>
        @foreach ($categories as $id => $name)
            <option value="{{ $id }}"
                @if ($id == old('category_id', $project->category_id)) selected @endif
            >{{ $name }}</option>
        @endforeach
    ></select>
</div>


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


