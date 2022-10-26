<x-app-layout>

<div class="app-title">
  <div>
    <h1><i class="fa fa-th-list"></i> Data Table</h1>
    <p>Table to display analytical data effectively</p>
  </div>
  <ul class="app-breadcrumb breadcrumb side">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Tables</li>
    <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="table-responsive">
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>Mother Name</th>
                <th>Present Address</th>
                <th>Permanent Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse($tutors_data as $value)
              <tr>
                <td>{{$value->id}}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->father_name}}</td>
                <td>{{ $value->mother_name}}</td>
                <td>{{ $value->present_address}}</td>
                <td>{{ $value->permanent_address}}</td>
                
                
                <td>
                <div class="btn-group" role="group" aria-label="Basic example">

                  <!-- notice edit id -->
                  @can('isEdit')
                  <a href="{{url('notice/edit')}}/{{Crypt::encryptString($value->id)}}" type="submit" class="alert alert-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                  @endcan
                  <!-- notice delete id -->
                  @can('isDelete')
                  <a href="{{url('notice/delete')}}/{{Crypt::encryptString($value->id)}}" type="submit" class="alert alert-warning "><i class="fa fa-trash"></i></a>
                  @endcan
                </div>
                </td>
              </tr>
              
               @empty
                  <tr>
                  <td colspan="6" class="text-center text-danger">No data available here.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

</x-app-layout>    

