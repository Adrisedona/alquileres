@extends('layouts.app')

@section('template_title')
    Rentals
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Alquileres') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('rentals.create') }}" class="btn text-success float-right"  data-placement="left">
                                    <i class="fa fa-fw fa-plus"></i>
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

									<th>Date</th>
									<th>Start Time</th>
									<th>End Time</th>
									<th>Id Room</th>
									<th>User</th>
                                    <th>User Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rentals as $rental)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $rental->date }}</td>
										<td >{{ $rental->start_time }}</td>
										<td >{{ $rental->end_time }}</td>
										<td >{{ $rental->id_room }}</td>
										<td >{{ $rental->user->name }}</td>
                                        <td >{{ $rental->user->email }}</td>

                                            <td>
                                                <form action="{{ route('rentals.destroy', $rental->id) }}" method="POST">
                                                    <a class="btn btn-link text-primary p-0 m-1" href="{{ route('rentals.show', $rental->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a class="btn btn-link text-warning p-0 m-1" href="{{ route('rentals.edit', $rental->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn text-danger" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $rentals->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
