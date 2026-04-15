
<!DOCTYPE html>
<html lang="en">
<title>{{@$EDITDATA->page_name}}</title>
   @include('admin.include.allcss')
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
      	@include('admin.include.session-toster') 
         @include('admin.include.topbar')  
      	 @include('admin.include.sidebar')  
         <div id="content" class="app-content">
            <h1 class="page-header add-header"><?php echo @$EDITDATA->page_name; ?></h1>
            <form class="row" method="post" enctype="multipart/form-data" action="{{ route($update_page_url, ['id' => $EDITDATA->id ?? 1]) }}">
            	 @csrf
               <div class="col-lg-12">
                  <div class="card m-b-15">
                     <div class="row card-body">

                        <div class="col-12 form-group">
                           <label>Meta Title </label>
                           <input type="text" class="form-control" name="meta_title" value="<?=@$EDITDATA->meta_title ?>" />
                        </div>

                        <div class="col-12 form-group">
                           <label>Meta Author </label>
                           <input type="text" class="form-control" name="meta_auther" value="<?=@$EDITDATA->meta_auther ?>" />
                        </div>
                        
                        <div class="col-12 form-group">
                           <label>Meta Keywords </label>
                           <input type="text" class="form-control" name="meta_keyword" value="<?=@$EDITDATA->meta_keyword ?>" />
                        </div>
                        
                        <div class="col-12 form-group">
                           <label>Meta Description </label>
                           <textarea name="meta_description" class=" form-control"><?=@$EDITDATA->meta_description ?></textarea>
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
   </body>
</html>