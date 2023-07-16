<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

    @include("admin.admincss")

  </head>
  <body>
  <div class="container-scroller">
    
      @include("admin.navbar")
      <div style="position: relative; top: 60px; right:-150px">
      <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
            
        @csrf
            <div >
                <lable>Title</lable>
                <input style="color:blue;" type="text" name="title"  value="{{$data->title}}" required>
            </div>
            <div style="padding-top: 5%;">
                <lable>Price</lable>
                <input style="color:blue;" type="num" name="price" value="{{$data->price}}" required>
            </div>
            
            <div style="padding-top: 5%;">
                <lable>Description</lable>
                <input style="color:blue;" type="text" name="description" value="{{$data->description}}" required>
            </div>

            <div style="padding-top: 5%;">
                <lable>Old Image</lable>
                <img height="200" width="200" src="/foodimage/{{$data->image}}">
            </div>
            <div style="padding-top: 5%;">
                <lable>New Image</lable>
                <input style="color:blue;" type="file" name="image" value="{{$data->image}}" required>
            </div>
            <div style="padding-top: 5%;">
                
                <input type="Submit" value="Save">
            </div>
        </form>
</div>
   </div>    
    @include("admin.adminscript")

  </body>
</html>