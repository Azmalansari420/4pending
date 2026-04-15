<!DOCTYPE html>
<html lang="en">
   <title><?=$page_title ?></title>
   @include('admin.include.allcss')
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
         @include('admin.include.session-toster') 
         @include('admin.include.topbar')  
         @include('admin.include.sidebar')

         <div id="content" class="app-content">
            <h1 class="page-header add-header"><?=$page_title ?> </h1>
            <form class="row" method="post" enctype="multipart/form-data" action="{{route($addupdate_form, @$EDITDATA->id)}}">
               @csrf
               <input type="hidden" name="id" value="{{ @$EDITDATA->id }}">
               <div class="col-lg-8">
                  <div class="card m-b-15">
                     <div class="row card-body">

                        <div class="col-4 form-group">
                            <label>Select Role</label>
                            <select class="selectpicker form-control" required name="role" data-style="btn-default" data-live-search="true">
                                @php
                                $role = DB::Table('role')->where('status',1)->get();
                                @endphp
                                @foreach($role as $data)
                                <option value="{{$data->id}}" {{ (isset($EDITDATA) && $EDITDATA->role == $data->id) ? 'selected' : '' }}>{{$data->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-4 form-group">
                           <label>Username  </label>
                           <input type="text" class="form-control" name="username" value="{{@$EDITDATA->username}}">
                        </div>

                        <div class="col-4 form-group">
                           <label>Password  </label>
                           <input type="text" class="form-control" name="password" value="{{@$EDITDATA->password}}">
                        </div>

                        

                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card m-b-15">
                     <div class="row card-body">

                       

                        <div class="col-12 form-group m-b-0">
                            <label>Select Status</label>
                            <select class="selectpicker form-control" required name="status" data-style="btn-default" data-live-search="true">
                                <option value="1" {{ (isset($EDITDATA) && $EDITDATA->status == 1) ? 'selected' : '' }}>Show</option>
                                <option value="0" {{ (isset($EDITDATA) && $EDITDATA->status == 0) ? 'selected' : '' }}>Hide</option>
                            </select>
                        </div>
                        <div class="col-12 form-group mt-4">
                           <button type="submit" name="submit" class="btn btn-purple"> <?=$page_title ?></button>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      </div>
      @include('admin.include.theams') 
      @include('admin.include.allscript')

      <script>
  CKEDITOR.replace( 'editor' );
</script>
   </body>
</html>