<div class="row">
    <div class="col-4">
    <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ $termo->slug?? NULL }}">
        </div>
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" name="titulo" class="form-control" value="{{ $termo->titulo?? NULL }}">
        </div>
        <div class="form-group">
            <label>Termo</label>
            <textarea name="texto" class="form-control">{{ $termo->texto?? NULL }}</textarea>
        </div>
        <button type="submit" class="btn btn-success"><i class="cui-check mr-2"></i>Salvar</button>
        <a href="{{ route('termos.index') }}" class="btn btn-warning"><i class="cui-back mr-2"></i>Cancelar</a>
    </div>
</div>
