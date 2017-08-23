<div class="form-group">
    <label>Title</label>
    {!! Form::text('name', null, [ 'class' => 'form-control', 'placeholder' => "Title", 'minlength' => "2", 'required']) !!}
</div>
<div class="form-group">
    <label>Category</label>
    {!! Form::select('category_id', $categories, null, ["class" => "form-control"]) !!}
</div>
<div class="form-group">
    <label>Price</label>
    {!! Form::number('price', $product->price, [ 'class' => 'form-control', 'value'=>'0']) !!}
</div>
<div class="form-group">
    <label>Sale</label>
    {!! Form::number('sale', $product->sale, [ 'class' => 'form-control', 'value'=>'0']) !!}
</div>
<div class="form-group">
    <label>Inventory Number</label>
    {!! Form::number('inventorynumber', $product->inventorynumber, [ 'class' => 'form-control', 'value'=>'0']) !!}
</div>
<div class="form-group">
    <label>Thumbnail</label>
    {!! Form::file('thumbnail',null, ["class" => "form-control"]) !!}
</div>

<div class="form-group">
    <label>Description</label>
    {!! Form::text('des', null, [ 'class' => 'form-control', 'placeholder' => "description"]) !!}
</div>
<button type="submit" class="btn btn-primary">Save</button>