@extends('layouts.app')

@section('template_title')
    Rooms
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Salas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('rooms.create') }}" class="btn text-success float-right"  data-placement="left">
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

									<th >Id Room</th>
									<th >Dimension</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rooms as $room)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $room->id }}</td>
										<td >{{ $room->dimension }}</td>

                                            <td>
                                                <form action="{{ route('rooms.destroy', $room->id) }}" method="POST">
                                                    <a class="btn text-primary " href="{{ route('rooms.show', $room->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a class="btn text-warning" href="{{ route('rooms.edit', $room->id) }}"><i class="fa fa-fw fa-edit"></i></a>
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
                {!! $rooms->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
