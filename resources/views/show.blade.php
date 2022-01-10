@section('content')
	<div class="row">
		<div class="col-sm-12">
			<table>

					<tr class = "text-center">
						<td>{{ $ticket->ticket_id }}</td>
						<td>{{ $ticket->name }}</td>
						<td>{{ $ticket->email }}</td>
						<td>{{ $ticket->time_slot }}</td>
						<td>{{ $ticket->book_date }}</td>
                        <td>{{ $ticket->qty }}</td>

					</tr>

			</table>
		</div>
	</div>
@endsection
