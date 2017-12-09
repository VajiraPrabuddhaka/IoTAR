<div class="col-md-8 col-lg-8">
    <div>
        <h1>Create New Indicator</h1>

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