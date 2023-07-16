<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
    
      @include("admin.navbar")
      <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div>
            <label>Name</label>
            <input style="color:blue;" type="text" name="name" required="" placeholder="write of name">
        </div>
        <div>
            <label>Speciality</label>
            <input style="color:blue;" type="text" name="speciality" required=""  placeholder="enter the speciality">
        </div>
        <div>
            
            <input type="file" name="image" required="" >
        </div>
        <div>
            <input style="color:blue;" type="submit" value="save">
        </div>
      </form>

      <table bgcolor="black" >
        <tr>
          <th style="padding :30px; ">Chef Name</th>
          <th style="padding :30px; ">Speciality</th>
          <th style="padding :30px; ">Image</th>
          <th style="padding :30px; ">Action</th>
          <th style="padding :30px; ">Action2</th>

        </tr>

        @foreach($data as $data)
        <tr align="center">
          <th>{{$data->name}}</th>
          <th>{{$data->speciality}}</th>
          <th><image height="100" width="100" src="/chefimage/{{$data->image}}"> </th>
          <th><a style="text-decoration-line: none" href="{{url('updatechef',$data->id)}}">Update</a></th>
          <th><a style="text-decoration-line: none" href="{{url('deletechef',$data->id)}}">Delete</a></th>
        </tr>
        @endforeach
       
      </table>



   </div>    
    @include("admin.adminscript")

  </body>
</html>