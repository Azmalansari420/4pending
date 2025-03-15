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
                        <div class="align-items-center">
                            <h1 class="h3">Create a ticket</h1>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header row gutters-5">
                            <div class="col text-center text-md-left">
                              <h5 class="mb-md-0 h6">Create Ticket</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="https://demo.activeitzone.com/matrimonial/support-ticket/store" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="WqgLNsDi4wd3k3FkbQYXuVsN1aHzUw9LyRimfiLT">                                <div class="form-group row">
                                    <label class="col-sm-2 col-from-label">Subject</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" name="subject" value="" placeholder="Enter ticket subject">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-from-label">Support category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control aiz-selectpicker" name="support_category_id" required data-placeholder="Select support category">
                                                                                            <option value="4">Account Related</option>
                                                                                            <option value="3">Report</option>
                                                                                            <option value="2">Sales</option>
                                                                                            <option value="1">Marketing</option>
                                                                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-from-label">Details</label>
                                    <div class="col-sm-10">
                                        <textarea class="aiz-text-editor" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-from-label">File Attachment</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-sm" data-toggle="aizuploader" data-multiple="true">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                            </div>
                                            <div class="form-control file-amount">Choose file</div>
                                            <input type="hidden" name="attachments" class="selected-files">
                                        </div>
                                        <div class="file-preview"></div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1">Send ticket</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $this->load->view("footer"); ?>