
<!DOCTYPE html>
<html lang="en">
<title>{{@$EDITDATA->name}}</title>
   @include('admin.include.allcss')
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
      	@include('admin.include.session-toster') 
         @include('admin.include.topbar')  
      	 @include('admin.include.sidebar')  
         <div id="content" class="app-content">
            <h1 class="page-header add-header"><?php echo @$EDITDATA->name; ?></h1>
            <form class="row" method="post" enctype="multipart/form-data" action="{{ route($update_page_url, ['id' => $EDITDATA->id ?? 1]) }}">
            	 @csrf
               <div class="col-lg-12">
                  <div class="card m-b-15">
                     <div class="row card-body">

                        
                        
                        <div class="col-12 form-group">
                           <label>Content </label>
                           <textarea name="content" id="editor" class=" form-control"><?=@$EDITDATA->content ?></textarea>
                        </div>
                        
                        <div class="col-12 form-group mt-4">
                           <button type="submit" name="submit" class="btn btn-purple">Submit</button>
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