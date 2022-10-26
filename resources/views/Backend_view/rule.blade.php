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
                      <th>Name</th>
                      <th>Rule</th>
                      <th>Create Access</th>
                      <th>Edit Access</th>
                      <th>Delete Access</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($user_data_show as $user_data)
                    <tr>
                      <form action="{{ url('rule/edit') }}" method="post"> 
                        @csrf 
                      <td>{{ $user_data->email}}</td>
                      <td>{{ $user_data->user_type}}</td>
                      <td>
                        <input name="rule_edit_id" type="hidden" value="{{ $user_data->id}}">
                          <select class="form-control @error ('Photo_category') is-invalid
                            @enderror"  name="create_access" required>
                                <option selected disabled >{{ $user_data->create_access}}</option>
                                @if($user_data->create_access =="not_create")<option value="create" >create</option>@endif
                                @if($user_data->create_access =="create")<option value="not_create" >not_create</option>@endif
                         </select>
                      </td>
                      <td>
                        <select class="form-control @error ('Photo_category') is-invalid
                            @enderror"  name="edit_access" required>
                                <option selected disabled >{{ $user_data->edit_access}}</option>
                                @if($user_data->edit_access =="not_edit")<option value="edit" >edit</option>@endif
                                @if($user_data->edit_access =="edit")<option value="not_edit" >not_edit</option>@endif
                        </select>
                        <td>
                            <select class="form-control @error ('Photo_category') is-invalid
                            @enderror"  name="delete_access" required>
                                <option selected disabled >{{ $user_data->delete_access}}</option>
                                @if($user_data->delete_access =="not_delete")<option value="delete" >delete</option>@endif
                                @if($user_data->delete_access =="delete")<option value="not_delete" >not_delete</option>@endif
                            </select>
                        </td>
                      <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <button class="btn btn-success" type="submit">Update</button>
                      </div>
                      </td>
                      </form>
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