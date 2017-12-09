@extends('layout.app')

@section('content')

    <script>
        var machine_id = "{{$id}}";
    </script>

    <div class="mq-panel-body">
        {{--<script type='text/javascript'>

            function theFunction()
            {
                console.log("fuck");
                return true;
            }

        </script>--}}

        @foreach(json_decode($machine_components, true) as $value)
            <a class='compon' id="{{$value['id']}}"  data-toggle="modal" data-target="#myModal1" id="trigger-btn" href="#" onclick="return theFunction(this.id);">
                <div class="mq-friends thumbnail">
                    <div class="mq-friends-footer">
                        <small> {{$value['component_name']}} </small>

                    </div>
                </div>
            </a>
        @endforeach


        <a id="m7" data-toggle="modal" data-target="#myModal" id="trigger-btn" href="">
            <div class="mq-friends thumbnail">
                <div class="text-center">
                    <img src={{asset('images/plus_icon.png')}} width="190" alt="User Avatar" class="img-circle">
                </div>
                <div class="mq-friends-footer">
                    <small>Add New</small>
                    <small> {{$id}} </small>
                </div>
            </div>
        </a>

    </div>

    <div class="modal fade modal-fullscreen" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="form-group col-md-4 pull-right">
                        <select class="form-control" id="selectUiElement">
                            <option selected="selected" value="1">Gauge</option>
                            <option value="2">Indicator</option>
                            <option value="3">Toggle Button</option>
                            <option value="4">Stack Indicator</option>
                        </select>
                    </div>

                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>

                {!! Form::open(['url' => url("/addNewComponent/{$id}")]) !!}

                <div id="uiElementForm" class="modal-body">
                    <div class="col-md-8 col-lg-8">
                        <div>
                            <h1>Create New Gauge</h1>

                        </div>
                        <br>


                        {{ Form::hidden('type', 'gauge') }}

                        <div class="form-group">
                            {{Form::label('Component name', 'Component name')}}
                            {{Form::text('component_name', '',[
                                                                'class'=>'form-control',
                                                                'required',
                                                                'data-parsley-required-message' => 'Name is required',
                                                                'placeholder'=>'Component name to display'
                                                                ])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('Start value', 'Start value')}}
                            {{Form::number('Start value','', [
                                                                'class'=>'form-control',
                                                                'required',
                                                                'data-parsley-required-message' => 'Start value is required'
                                                                ])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('End value', 'End value')}}
                            {{Form::number('End_value','', [
                                                                'class'=>'form-control',
                                                                'required',
                                                                'data-parsley-required-message' => 'End value is required'
                                                                ])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('Unit', 'Unit')}}
                            {{Form::text('unit', '',[
                                                        'class'=>'form-control',
                                                        'placeholder'=>'Define unit here',
                                                        'required',
                                                        'data-parsley-required-message' => 'Unit is required'
                                                        ])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('Mqtt_topic', 'Mqtt_topic')}}
                            {{Form::text('topic', '', [
                                                        'class'=>'form-control' ,
                                                        'placeholder'=>'Mqtt topic',
                                                        'required',
                                                        'data-parsley-required-message' => 'Topic is Required.'
                                                        ])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('IP', 'IP')}}
                            {{Form::text('ip', '',[
                                                    'class'=>'form-control',
                                                    'placeholder'=>'IP address',
                                                    'required',
                                                    'data-parsley-required-message' => 'Ip address is required'
                                                    ])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('port', 'port')}}
                            {{Form::number('port','', [
                                                        'class'=>'form-control',
                                                        'required',
                                                        'data-parsley-required-message' => 'Port number is required'
                                                        ])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('time_interval', 'Time interval for fetch data')}}
                            {{Form::number('time_interval','', [
                                                                    'class'=>'form-control',
                                                                    'required',
                                                                    'data-parsley-required-message' => 'Define a time interval'
                                                                    ])}}
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                    {{Form::submit('submit', ['class'=>'btn btn-primary'])}}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection

