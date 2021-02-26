<div class="form-group">
    <label for="title">Name</label>
    <input type="text" name="title" value="{{ old('title') ?? $post->title }}" id="title" class="form-control">
    @error('title')
        <div class="text-danger mt-2">
            {{ $message }}
        </div>
    @enderror

</div>

<div class="form-group">
    <label for="Category">Status</label>
    <select name="category" id="category" class="form-control">
        <option disabled selected>Choose one!</option>
        @foreach ($categories as $category)
            <option {{ $category->id == $post->category_id ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
        @error('category')
        <div class="text-danger mt-2">
            {{ $message }}
        </div>
    @enderror

</div>

<div class="form-group">
    <label for="body">Deskripsi</label>
    <textarea name="body" id="body" class="form-control">{{ old('body') ?? $post->body }}</textarea>
    @error('body')
        <div class="text-danger mt-2">
            {{ $message }}
        </div>
    @enderror
</div>
<br>
<button type="submit" class="btn btn-primary">{{ $submit ?? 'Update' }}</button>
