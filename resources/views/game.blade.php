@extends('layouts.app')

@section('content')

<div class="container-fluid">



    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h3>FizzBuzz Game</h3>
                </div>

                <div class="card-body">

                    @if(count($errors->all())>0)
                        <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </div>
                    @endif
                    <form method="post" action="{{route('generate')}}">
                        @csrf
                        <div class="form-group col-md-6 col-lg-6 ">
                            <label for="number">Please Input the Numbers to Generate</label>
                            <input class="form-control" name="number" type="number" id="number" min="1" required>
                        </div>
                        <div class="form-group col-md-6 col-lg-6 mt-4">

                            <button class="btn btn-primary">Generate</button>

                        </div>
                    </form>
                </div>


            </div>


        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 ">
          <div class="card">
              <div class="card-header">
                  <h3>Results</h3>
              </div>
              <div class="card-body">

                  @if(request()->session()->has('results'))
                      @foreach(request()->session()->get('results') as $record)


                          {{$loop->iteration}} :    {{$record}}
                          <br>
                          @endforeach
                      @endif



              </div>
          </div>
        </div>

    </div>
</div>
    @endsection

@section('script')
<script >

    let content=new Vue({

    })
</script>

    @endsection