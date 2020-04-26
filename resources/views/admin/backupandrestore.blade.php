@extends('masterpages.adminlayout')

@section('content')
	<div class="section-list">
		<h1>BACKUP FILES AND DATABASE</h1>
		<a href="{{ route('createBackup') }}" class="btn btn-primary mt-2"><span class="fa fa-download"></span> CREATE BACK-UP</a>

		<div class="col-xs-12 mt-3">

            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>File</th>
                    <th>Size</th>
                    <th>Date</th>
                    <th>Age</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($backups as $backup)
                    <tr>
                        <td>{{ $backup['file_name'] }}</td>
                        <td>{{ $backup['file_size'] }}</td>
                        <td>
                            {{ $backup['last_modified'], 'F jS, Y, g:ia (T)' }}
                        </td>
                        <td>
                            {{ $backup['last_modified'] }}
                        </td>
                        <td class="text-right">
                            <a class="btn btn-xs btn-default"
                               href="{{ url('/admin/backupdownload/'.$backup['file_name']) }}"><i
                                    class="fa fa-cloud-download"></i> Download</a>
                            <a class="btn btn-xs btn-danger" data-button-type="delete"
                               href="{{ url('/admin/backupdelete/'.$backup['file_name']) }}"><i class="fa fa-trash-o"></i>
                                Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
	</div>
@endsection