<?php $this->load->view("header"); ?>

         <section class="py-5 memeber-list">
            <div class="container">
               <div class="d-flex align-items-start">
                  <div class="aiz-user-sidenav-wrap pt-4 sticky-top c-scrollbar-light position-relative z-1 shadow-none">
                     <div class="absolute-top-left d-xl-none">
                        <button class="btn btn-sm p-2" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb">
                        <i class="las la-times la-2x"></i>
                        </button>
                     </div>
                     <?php $this->load->view('user-sidebar'); ?>
                  </div>
                  <div class="aiz-user-panel">
                     <div class="aiz-titlebar mt-2 mb-4">
                        <div class="row align-items-center">
                           <div class="col-md-6">
                              <h1 class="h3">Support Tickets</h1>
                           </div>
                           <div class="col-md-6 text-md-right">
                              <a href="https://demo.activeitzone.com/matrimonial/support-ticket/create" class="btn btn-primary">
                              <i class="las la-plus"></i>
                              <span>Create New Ticket</span>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header row gutters-5">
                           <div class="col text-center text-md-left">
                              <h5 class="mb-md-0 h6">All Tickets</h5>
                           </div>
                           <div class="col-md-3 ml-auto">
                              <select class="form-control aiz-selectpicker" name="delivery_status" id="delivery_status" onchange="sort_orders()">
                                 <option value="showCategoryByFilterSelect1" selected>All</option>
                                 <option value="showCategoryByFilterSelect2">Pending</option>
                                 <option value="showCategoryByFilterSelect2">Opened</option>
                                 <option value="showCategoryByFilterSelect3">Solved</option>
                              </select>
                           </div>
                        </div>
                        <div class="card-body">
                           <table class="table aiz-table mb-0">
                              <thead>
                                 <tr>
                                    <th data-breakpoints="md">#</th>
                                    <th>ID</th>
                                    <th>Status</th>
                                    <th data-breakpoints="md">Subject</th>
                                    <th data-breakpoints="md">Category</th>
                                    <th data-breakpoints="md">Created at</th>
                                    <th data-breakpoints="md">New Reply</th>
                                    <th data-breakpoints="md" class="text-right">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>1</td>
                                    <th>20210629-114300</th>
                                    <td>
                                       <span class="badge badge-inline badge-danger">Pending</span>
                                    </td>
                                    <td>Cupiditate</td>
                                    <td>Sales</td>
                                    <td>2021-06-29 01:43:00</td>
                                    <td>
                                       0
                                    </td>
                                    <td class="text-right">
                                       <a class="btn btn-xs btn-soft-primary" href="https://demo.activeitzone.com/matrimonial/support-ticket/view-details/eyJpdiI6IkZlU1JzelRlelBKelYvZmFubitBUmc9PSIsInZhbHVlIjoidHNiUVlOcVUxbVp0YVBUakpRUC9pQT09IiwibWFjIjoiYTE0MTdkZTYxNWEyM2MzZDIzOTVhZmZjNzFhZGVmYjQ1M2NkNDBhOWIyNmZhYjgxMWUwNGQwN2RjMzg0NTczNiIsInRhZyI6IiJ9">View Details</a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <th>20210629-114218</th>
                                    <td>
                                       <span class="badge badge-inline badge-danger">Pending</span>
                                    </td>
                                    <td>Voluptatibus quia id</td>
                                    <td>Report</td>
                                    <td>2021-06-29 01:42:18</td>
                                    <td>
                                       0
                                    </td>
                                    <td class="text-right">
                                       <a class="btn btn-xs btn-soft-primary" href="https://demo.activeitzone.com/matrimonial/support-ticket/view-details/eyJpdiI6ImErSkJDeEpWOVVLSkpuZE1nd0Rnb3c9PSIsInZhbHVlIjoid2FXTERmcjNoTHZvRDdHK3RCN2ZDUT09IiwibWFjIjoiNGU3OWIzMWMyNGQ5MzNiNWIwNWY1MjkwNzlmODJmYmYzODIwMzY3MTZlNjI5ODJmODk4YTJiYWIyNzdhMTVhNCIsInRhZyI6IiJ9">View Details</a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <th>20210629-114156</th>
                                    <td>
                                       <span class="badge badge-inline badge-danger">Pending</span>
                                    </td>
                                    <td>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</td>
                                    <td>Account Related</td>
                                    <td>2021-06-29 01:41:56</td>
                                    <td>
                                       0
                                    </td>
                                    <td class="text-right">
                                       <a class="btn btn-xs btn-soft-primary" href="https://demo.activeitzone.com/matrimonial/support-ticket/view-details/eyJpdiI6Img4SDlselk2akF3c3JpckxJS1lEQ0E9PSIsInZhbHVlIjoiWW9ldXRBamwxdEw0bERWOFp0akExZz09IiwibWFjIjoiNGExNWE5MjEyZjk4MDMxZThjNzhjNDkxZDY3MmI1NzYyMzQ0ODBkMjg0NmNkNGYyNzM5YWFjOWYzMGRhM2VhMyIsInRhZyI6IiJ9">View Details</a>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           <div class="aiz-pagination">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
       <?php $this->load->view("footer"); ?>