@csrf
<input type="text" name="title" placeholder="Titulo del proyecto" value="{{ old('title' ,$project->title) }}">
        <br>
        <input type="text" name="url" placeholder="Url del proyecto" value="{{ old('url', $project->url) }}">
        <br>
        <textarea name="description" placeholder="Descripción del proyecto">{{ old('description', $project-> description) }}</textarea>
        <br>
        <button> {{ $btnText }} </button>
