<div class="mb-3">
  <label class="form-label">{{$user}}</label>
  <input type="text" class="form-control @error('userName') is-invalid @enderror" name="userName" placeholder="{{$placeUser}}">
</div>
@error('userName')
  <div class="alert alert-danger">{{$message}}</div> 
@enderror
<div class="mb-3">
  <label class="form-label">{{$senha}}</label>
  <input type="number" class="form-control @error('senha') is-invalid @enderror" name="senha" placeholder="{{$placeSenha}}">
</div>
@error('senha')
  <div class="alert alert-danger">{{$message}}</div>
@enderror
<div class="mb-3">
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>