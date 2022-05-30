<div class="form-group">
    <label>Module :</label>
    <input type="text" name="name" placeholder="Enter Module" value="{{ old('name') ?? $row->name ?? '' }}"
           class="form-control{{ ($errors->has('name'))?' form-error':'' }}">
    @if($errors->has('name'))
        <div class="form-error-message">{{ $errors->first('name') }}</div>
    @endif
</div>

