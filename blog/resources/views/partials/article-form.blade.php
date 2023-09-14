<div class="mb-3 my-4 mx-4">
    <label for="exampleFormControlInput1" class="form-label">User_id :</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="user_id" placeholder="Put a user_id">
</div>

<div class="mb-3 my-4 mx-4">
    <label for="exampleFormControlInput1" class="form-label">Title :</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="title"
        value="{{ old('title', isset($article->title) ? $article->title : null) }}"
        placeholder="Enter your article title">
    @error('title')
        <div>{{ $message }}</div>
    @enderror
</div>

<div class="mb-3 my-4 mx-4">
    <label for="exampleFormControlTextarea1" class="form-label">Article body :</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="3">{{ old('body', isset($article->body) ? $article->body : null) }}</textarea>
    @error('body')
        <div>{{ $message }}</div>
    @enderror
</div>
<div class="my-4 mx-4">
    <label for="formFileLg" class="form-label">Upload your article image :</label>
    <input class="form-control form-control-lg" id="formFileLg" name="image" type="file">
    @error('image')
        <div>{{ $message }}</div>
    @enderror
</div>
<div class="mb-3 mx-4">
    <button class="btn btn-primary" type="submit">Valider</button>
</div>
