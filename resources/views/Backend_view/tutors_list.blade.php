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
                <th>Category</th>
                <th>Hadeline</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse($notice_data as $notice_datashow)
              <tr>
                <td>{{$notice_datashow->id}}</td>
                <td>{{ $notice_datashow->title}}</td>
                <td>
                  <textarea>{{ $notice_datashow->description}}</textarea>
                </td>
                <td>@if(!$notice_datashow->created_at == null)
                  {{$notice_datashow->created_at}}@endif</td>
                
                <td>
                <div class="btn-group" role="group" aria-label="Basic example">

                  <!-- notice edit id -->
                  @can('isEdit')
                  <a href="{{url('notice/edit')}}/{{Crypt::encryptString($notice_datashow->id)}}" type="submit" class="alert alert-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                  @endcan
                  <!-- notice delete id -->
                  @can('isDelete')
                  <a href="{{url('notice/delete')}}/{{Crypt::encryptString($notice_datashow->id)}}" type="submit" class="alert alert-warning "><i class="fa fa-trash"></i></a>
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

