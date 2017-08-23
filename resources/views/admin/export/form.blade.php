<div class="form-group">
    <label>User</label>
    {!! Form::text('user_id', null, [ 'class' => 'form-control', 'placeholder' => "User_id", 'required']) !!}
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