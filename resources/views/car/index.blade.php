@extends('layouts.app')

@section('template_title')
    Cars
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cars') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cars.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Brand</th>
									<th >Model</th>
									<th >Year</th>
									<th >Chassis</th>
									<th >Engine</th>
									<th >Price</th>
									<th >State</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cars as $car)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $car->brand }}</td>
										<td >{{ $car->model }}</td>
										<td >{{ $car->year }}</td>
										<td >{{ $car->chassis }}</td>
										<td >{{ $car->engine }}</td>
										<td >{{ $car->price }}</td>
										<td ><span style="color:#fff" class="{{ $car->state == 0 ? 'badge bg-success' : 'badge bg-danger'}}">{{ $car->state == 0 ? __('available') : __('unavailable')}}</span></td>

                                            <td>
                                                <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cars.show', $car->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cars.edit', $car->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $cars->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
