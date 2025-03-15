<?php $this->load->view("header"); ?>

        
<div class="py-6">
    <div class="container">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-md-8 mx-auto">
                <div class="bg-white rounded shadow-sm p-4 text-left">
                    <h1 class="h3 fw-600">Forgot Password?</h1>
                    <p class="mb-4 opacity-60">
                                                    Enter your email address or phone number to recover your password.
                                            </p>
                    <form method="POST" action="https://demo.activeitzone.com/matrimonial/password/email">
                        <input type="hidden" name="_token" value="vTuYyxOAqmXh6ANTzcmGbjQtwU4aS6lLAGHE0Oep">                        <div class="form-group">
                                                            <input id="email" type="text" class="form-control" name="email" value="" required placeholder="Email Or Phone">
                            
                                                    </div>
                        <div class="form-group text-right">
                            <button class="btn btn-primary btn-block" type="submit">
                                Send Password Reset Link
                            </button>
                        </div>
                    </form>
                    <div class="mt-3">
                        <a href="../users/login.html" class="text-reset opacity-60">Back to Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <?php $this->load->view("footer"); ?>
