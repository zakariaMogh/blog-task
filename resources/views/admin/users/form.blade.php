<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="name"
           value="{{$user->name ?? old('name')}}">
</div>
@error('name')
<div class="text-danger">
    {{$message}}
</div>
@enderror

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email"
           value="{{$user->email ?? old('email')}}">
</div>
@error('email')
<div class="text-danger">
    {{$message}}
</div>
@enderror

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror"
           id="password" name="password" placeholder="password">
</div>
@error('password')
<div class="text-danger">
    {{$message}}
</div>
@enderror

<div class="form-group">
    <label for="password_confirmation">Password confirmation</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror"
           id="password_confirmation" name="password_confirmation" placeholder="password">
</div>

