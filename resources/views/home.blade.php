@extends('layout.app')

@section('content')

            <div class="mq-panel-body">

                @foreach(json_decode($machine_json, true) as $value)
                    <a id="m1" href={{url("machine/{$value['id']}")}}>
                        <div class="mq-friends thumbnail">

                            <div class="mq-friends-footer">
                                <small>{{$value['name']}}</small>
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
                        </div>
                    </div>
                </a>

            </div>


            <div class="modal fade modal-fullscreen" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-8 col-lg-8">
                                @include('inc.messages')

                                <h1>Create new machine here</h1>
                                <br>
                                {!! Form::open(['url' => '/addNewMachine']) !!}
                                <div class="form-group">
                                    {{Form::label('Name', 'Name')}}
                                    {{Form::text('Name', '', ['class'=>'form-control', 'placeholder'=>'Enter machine name here'])}}
                                </div>
                                <br>
                                <div class="form-grouhomep">
                                    {{Form::label('location', 'location')}}
                                    {{Form::text('location', '',['class'=>'form-control', 'placeholder'=>'Enter your related location (just to remember)'])}}
                                </div>
                                <br>
                                <div class="form-group">
                                    {{Form::label('desc', 'Enter some description to show')}}
                                    {{Form::text('desc','',['class'=>'form-control'])}}
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