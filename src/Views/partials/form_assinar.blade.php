{!! Form::open(['url' => route('termo.assinar')]) !!}
    <input type="hidden" name="cliente_id" value="{{ $cliente->clie_id_cliente }}">
    <input type="hidden" name="termo_id" value="{{ $termo->id }}">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label>Seu Nome</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Seu Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Seu Telefone</label>
                <input type="text" name="telefone" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success"><i class="cui-check mr-2"></i>Salvar</button>
        </div>
    </div>
{!! Form::close() !!}