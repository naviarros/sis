@extends('masterpages.adminlayout')

@section('content')
<div class="section-list">
    <table id="example" class="table table-bordered">
        <thead>
            <th>Send To</th>
            <th>Date</th>
            <th>Announcent</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($announce as $anno)
                <tr>
                    <td>{{ $anno->sendto}}</td>
                    <td>{{ $anno->created_at }}</td>
                    <td>{{ $anno->description }}</td>
                    <td>
                        <button class="btn btn-danger announcement-delete" data-id="{{ $anno->announcement_id }}"><span class="fa fa-trash"></span></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection