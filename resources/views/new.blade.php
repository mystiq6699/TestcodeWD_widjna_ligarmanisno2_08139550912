@extends('layouts.app')

@section('title')
    Add Order
@endsection

@section('body')

<section class="vbox">
    <section class="scrollable padder">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Workset</li>
        </ul>
        <div class="m-b-md">
            <h3 class="m-b-none">Add a Order</h3>
        </div>
        <section class="panel panel-default">
            <header class="panel-heading">
                Add Order
                <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
            </header>

            <div class="panel-body">
                {!! Form::open(array('route'=>'order.store')) !!}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>No Meja</label>
                            {!! Form::text('no_meja', '', ['placeholder'=>'No Meja', 'class'=>'form-control input-lg','required']) !!}
                        </div>
                        <div class="form-group">
                            <label>No Pesanan</label>
                            {!! Form::text('no_pesanan', '', ['placeholder'=>'No Pesanan', 'class'=>'form-control input-lg','required']) !!}
                        </div>
                        <div class="form-group">
                            <label>Makanan</label>
                            {!! Form::textarea('makanan', '', ['placeholder'=>'Enter menu makanan', 'class'=>'form-control input-lg','rows'=>'3','required']) !!}
                        </div>
                        <div class="form-group">
                            <label>minuman</label>
                            {!! Form::textarea('minuman', '', ['placeholder'=>'Enter menu minuman', 'class'=>'form-control input-lg','rows'=>'3','required']) !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Tanggal</label>
                            {!! Form::date('tanggal', '', [ 'class'=>'form-control input-lg','required']) !!}
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Total</label>
                                    {!! Form::number('total', '', ['placeholder'=>'Enter total', 'class'=>'form-control input-lg','required']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="line line-dashed line-lg pull-in"></div>
                        <div class="row">
                            <div class="form-group">
                                <label class="col-sm-2">Status</label>
                                <div class="col-sm-10 ">
                                    <label class="radio-custom col-md-2 input-md">{!! Form::radio('order_status', 'Confirm') !!}<i class="fa fa-circle-o fa-1x"></i>Confirm </label>
                                    <label class="radio-custom col-md-2 input-md">{!! Form::radio('order_status', 'Ready') !!}<i class="fa fa-circle-o"></i>Item Ready </label>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="line line-dashed line-lg pull-in"></div>
                        {!! Form::submit('Submit', [ 'class'=>'btn btn-default']) !!}
                    </div>
                {!! Form::close() !!}
            </div>

        </section>
    </section>
</section>

@endsection