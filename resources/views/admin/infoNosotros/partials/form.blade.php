<div class="form-group">
    <label class="col-md-3 form-control-label" for="nos_logo">Logo</label>
    <div class="col-md-9">
        <input type="text" name="nos_logo" class="form-control" placeholder="ejemplo: lni-layers" value="{{ $card->nos_logo }}">
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 form-control-label" for="nos_titulo">Titulo</label>
    <div class="col-md-9">
        <input type="text" name="nos_titulo" class="form-control" placeholder="Opcional" value="{{ $card->nos_titulo }}">
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 form-control-label" for="nos_descripcion">Descripcion</label>
    <div class="col-md-9">
        <textarea class="form-control" rows="5" id="nos_descripcion" name="nos_descripcion" placeholder="descripcion">{{ $card->nos_descripcion }}</textarea>
    </div>
</div>

<div class="form-group">
	<button type="submit" class="btn btn-sm btn-primary">Guardar</button>
</div>