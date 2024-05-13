<table class="table table-striped table-bordered">
    <thead>
        <tr> 
            <th>Họ Tên</th>
            <th>Email</th>
            <th>Phone</th> 
            <th>Địa Chỉ</th>
            <th>Thao Tác</th>
        </tr>
    </thead>
    <tbody>
     @if(isset($users)&& is_object($users))
     @foreach ($users as $user)
        <tr>
            <td>
                {{$user->name}}
             
            </td>
            <td>
                {{$user->email}}
                
            </td>
            <td>
                {{$user->phone}}

            </td>
            <td>
                {{$user->adress}}
            </td>
           
            <td>
                <div class="btn btn-success"><i class="fa fa-edit"></i></div>
                <div class="btn btn-danger"><i class="fa fa-trash"></i></div>
            </td>
        </tr>
        @endforeach 
     @endif
    </tbody>
</table>