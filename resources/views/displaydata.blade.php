    @extends('app')
    @section('main-content')
<div class="container">
    <h1>List of created form</h1>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>form Name</th>
                <th>form description</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   

   
<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('list.of.form') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'}, 
            {data: 'form_description', name: 'form_description'}, 
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script>
@endsection
