@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} / {{__('Избранное')}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <div class="row">
                      <table class="row-cols-lg-4">
                          <tr>
                              <th>Name</th>
                              <th>Last Name</th>
                              <th> E-mail</th>
                              <th>Phone Number</th>
                              <th>Action</th>
                          </tr>
                          @foreach($contacts as $item)
                          <tr>
                              <td class="active">{{$item->name}}</td>
                              <td>{{$item->last_name}}</td>
                              <td>{{$item->email}}</td>
                              <td>{{$item->phone}}</td>
                              <td><button>Add to favorites</button></td>
                          </tr>
                          @endforeach
                      </table>
                  </div>

                </div>
            </div>
            <div>{{ $contacts->render("pagination::default") }}</div>
        </div>

<!--        {!! $contacts->render() !!}-->
    </div>
</div>
@endsection
