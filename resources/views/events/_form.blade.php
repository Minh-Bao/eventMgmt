<div class="form-group is-invalid text-warning">
    <label for='title' class="control-label sr-only">Titre</label>
    <input type="text" id="title" name="title" value="{{ old('title') ? old('title') :  $event->title }}" class="form-control">
    <span class="help-block">{{ $errors->first('title'), ':message' }}</span>
</div>

<div class="form-group is-invalid text-warning">
    <label for='description' class="control-label sr-only">Description</label>
    <textarea class="form-control" name="description" rows="10" id="description">{{ old('description') ? old('description') : $event->description }}</textarea>
    <span class="help-block">{{ $errors->first('description'), ':message' }}</span>
</div>    

<div class="form-group">
    <input type="submit" value="{{ $submitButtonText }}" class="btn btn-primary btn-block"><br>
</div>
