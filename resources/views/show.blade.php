@extends('layouts.app')

@section('body')

<section class="vbox bg-white">
    <header class="header b-b b-light hidden-print">
        <button href="#" class="btn btn-sm btn-info pull-right" onClick="window.print();">Print</button>
        <p>Invoice</p>
    </header>
    <section class="scrollable wrapper" id="print">
        <div class="row">
            
            <div class="col-xs-6 text-right">
                <h4>INVOICE</h4>
            </div>
        </div>
        <div class="well m-t" style="margin-bottom: 50px">
            <div class="row">
                <div class="col-xs-6">
                    <strong>TO:</strong>
                    <h4>{{ $order->no_meja }}</h4>
					<p>
						{{ $order->no_pesanan}}
					</p>
                    <p>
                        {{ $order->makanan }}
                    </p>
					<p>
						{{ $order->minuman}}
					</p> 
                </div>
                <div class="col-xs-6 text-right">
                    <p class="h4">#{{ $order->id }}</p>
                    <h5>{{ $order->tanggal }}</h5>
                    <p class="m-t m-b">Order date: <strong>26th Mar 2018</strong><br>
                        Order ID: <strong>#9399034</strong>
                    </p>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <table class="table">
            <thead>
            <tr>
                <th width="60">QTY</th>
                <th>DESCRIPTION</th>
                <th width="120">TOTAL</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="2" class="text-right"><strong>Subtotal</strong></td>
                <td>Tk {{ $order->total }}</td>
            </tr>
            <tr>
                <td colspan="2" class="text-right no-border"><strong>VAT Included in Total</strong></td>
                <td>$0.00</td>
            </tr>
            <tr>
                <td colspan="2" class="text-right no-border"><strong>Total</strong></td>
                <td><strong>TK {{ $order->total }}</strong></td>
            </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-xs-8">
                <p><i> Buy goods  cdsncl dskjckjds sdc dsjbc dsv sdjuguas csaasooief aihashasfnsakoasss sa fosafosa yfoasyfoaisfoa asfas f sa foyaosyosayf as f asyofyoasyfas as</i></p>

                <p>Recvied By: __________________ </p>
            </div>
        </div>
    </section>
</section>

@endsection