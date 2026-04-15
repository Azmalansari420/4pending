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
                        <div class="col-12 form-group">
                           <label>Role Name  </label>
                           <input type="text" class="form-control" name="name" value="{{@$EDITDATA->name}}">
                        </div>

                        @php
                         $menuname      = menuname();       // main menu list
                         $access_array  = access_array();   // inner menu list
                         $main_access   = [];
                         $inner_access  = [];

                         if (!empty($EDITDATA->role_access)) {
                             $access       = json_decode($EDITDATA->role_access);
                             $main_access  = $access->main_access ?? [];
                             $inner_access = $access->inner_access ?? [];
                         }
                     @endphp

                     <div class="row">
                     @foreach($menuname as $key => $value)

                         @php 
                             $checkedMain = (!empty($main_access) && in_array($key, $main_access)) ? 'checked' : '';
                         @endphp

                         <div class="col-lg-3 mb-3">

                             <input type="hidden" name="access_count[]" value="{{ $key }}">

                             <label class="btn btn-dark w-100">
                                 <input type="checkbox" name="main_access[]" class="form-check-input" 
                                        value="{{ $key }}" {{ $checkedMain }}>
                                 {{ $value }}
                             </label>

                             <ul class="mt-2">
                                 @foreach($access_array as $key2 => $value2)

                                     @php 
                                         $checkedInner = (!empty($inner_access[$key]) && in_array($key2, $inner_access[$key])) 
                                                        ? 'checked' : '';
                                     @endphp

                                     <li>
                                         <label class="checkbox-success">
                                             <input type="checkbox" 
                                                    name="inner_access{{ $key }}[]" 
                                                    class="form-check-input"
                                                    value="{{ $key2 }}" {{ $checkedInner }}>
                                             {{ $value2 }}
                                         </label>
                                     </li>

                                 @endforeach
                             </ul>

                         </div>
                     @endforeach
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