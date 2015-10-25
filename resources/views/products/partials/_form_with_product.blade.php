{!! Form::label('name', 'Product Name') !!}
{!! Form::text('product_name', "Kayak", ['class' => 'form-control']) !!}

{!! Form::label('address', 'Product Address') !!}
{!! Form::text('product_street', "125 N Clybourne Ave.", ['class' => 'form-control']) !!}
{!! Form::text('product_city', "Chicago", ['class' => 'form-control']) !!}
{!! Form::text('product_state', "IL", ['class' => 'form-control']) !!}
{!! Form::text('product_zipcode', "60657", ['class' => 'form-control']) !!}

{!! Form::label('base_price_per_hour', 'Product Base Price per Hour') !!}
{!! Form::text('base_price_per_hour', "10", ['class' => 'form-control']) !!}

{!! Form::label('base_price_per_day', 'Product Base Price per Day') !!}
{!! Form::text('base_price_per_day', "30", ['class' => 'form-control']) !!}

{!! Form::label('base_price_per_week', 'Product Base Price per Week') !!}
{!! Form::text('base_price_per_week', "50", ['class' => 'form-control']) !!}

{!! Form::label('base_price_per_month', 'Product Base Price per Month') !!}
{!! Form::text('base_price_per_month', "100", ['class' => 'form-control']) !!}

{!! $errors->first('name', '<small class="error">:message</small>') !!}
{!! $errors->first('base_price_per_hour', '<small class="error">:message</small>') !!}
{!! $errors->first('base_price_per_day', '<small class="error">:message</small>') !!}
{!! $errors->first('base_price_per_week', '<small class="error">:message</small>') !!}
{!! $errors->first('base_price_per_month', '<small class="error">:message</small>') !!}

{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}