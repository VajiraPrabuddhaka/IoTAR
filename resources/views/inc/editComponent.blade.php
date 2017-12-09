@extends('app)

@section('content')

    <div class="modal modal-fullscreen" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-8 col-lg-8">

                        <h1>Configure new machine here</h1>
                        <br>
                        {!! Form::open(['url' => '/addNewMachine']) !!}
                        <div class="form-group">
                            {{Form::label('Label1', 'Label1')}}
                            {{Form::text('slogan', '', ['class'=>'form-control', 'placeholder'=>'Enter your slogan here'])}}
                        </div>

                        <div class="form-grouhomep">
                            {{Form::label('Label2', 'Label2')}}
                            {{Form::number('ad_id', '',['class'=>'form-control', 'placeholder'=>'Enter your related advertisement id here'])}}
                        </div>

                        {{--<div class="form-group">
                            {{Form::label('Slogan', 'Slogan')}}
                            {{Form::text('slogan', '', ['class'=>'form-control', 'placeholder'=>'Enter your slogan here'])}}
                        </div>--}}

                        <div class="form-group">
                            {{Form::label('Label3', 'Label3')}}
                            {{Form::select('region', ['L' => 'Colombo', 'S' => 'Gampaha'], ['class'=>'form-control'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('startsin', 'Offer starts in')}}
                            {{Form::date('starts_in', '')}}
                        </div>

                        <div class="form-group">
                            {{Form::label('period', 'Select period that you want to active offer for')}}
                            {{Form::select('period', ['d' => 'Daily', 'w' => 'Weekly', 'm' => 'Monthly'], ['class'=>'form-control'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('endsin', 'Offer ends in')}}
                            {{Form::date('ends_in', '')}}
                        </div>

                        <div class="form-group">
                            {{Form::label('vperiod', 'Select valid period for buying offer')}}
                            {{Form::number('valid_period', 'value',['class'=>'form-control'])}}
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                    {{Form::submit('submit', ['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>

@endsection