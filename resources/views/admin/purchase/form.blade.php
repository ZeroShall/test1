<div class="form-group">
    <label>Supplier</label>
    {!! Form::select('supplier_id', $suppliers, null, ["class" => "form-control"]) !!}
</div>
<div class="form-group">
    <label>Trade Date</label>
    {!! Form::date('trade_date', null , [ 'class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label>Total</label>
    {!! Form::number('total', '0', [ 'class' => 'form-control', 'value'=>'0']) !!}
</div>
<button type="submit" class="btn btn-primary">Save</button>