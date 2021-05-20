<form action="" method="post" enctype="multipart/form-data" class="was-validated">
            <h4 class="text-center"style="color:green;font-family: 'Times New Roman', Times, serif;"><?php if(isset($msg)) echo $msg; ?></h4>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="name"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Firstname</label>
                        <input type="text" class="form-control" id="name" name="firstname" style="font-size:15px;font-family: 'Times New Roman', Times, serif" placeholder="Firstname" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>

                        <div class="form-group">
                            <label for="name"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">MiddleName</label>
                            <input type="text" class="form-control" id="name" name="middleName" style="font-size:15px;font-family: 'Times New Roman', Times, serif" placeholder="MiddleName" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-group">
                            <label for="name"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">LastName</label>
                            <input type="text" class="form-control" id="name" name="lastname" style="font-size:15px;font-family: 'Times New Roman', Times, serif" placeholder="LastName" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-group">
                            <label for="name"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Username</label>
                            <input type="text" class="form-control" id="name" name="username" style="font-size:15px;font-family: 'Times New Roman', Times, serif" placeholder="Username" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <label style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Feature Images</label><br>
                        <input type="file" name="pix" placeholder="required">
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Password</label>
                            <input type="password" class="form-control" id="name" name="password" style="font-size:15px;font-family: 'Times New Roman', Times, serif" placeholder="Password" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-group">
                            <label for="name"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Date of Birth</label>
                            <input type="date" class="form-control" id="name" name="d_o_b" style="font-size:15px;font-family: 'Times New Roman', Times, serif" placeholder="Date of Birth" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-group">
                            <label for="name"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Phone Number</label>
                            <input type="text" class="form-control" id="name" name="phone" style="font-size:15px;font-family: 'Times New Roman', Times, serif" placeholder="Phone Number" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <div class="form-group">
                            <label for="name"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Email</label>
                            <input type="text" class="form-control" id="name" name="email" style="font-size:15px;font-family: 'Times New Roman', Times, serif" placeholder="Email" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                </div>
                    <br><br>
                    <input type="submit" class="btn btn-secondary" value="submit" name="submit" style="font-size:15px;font-family: 'Times New Roman', Times, serif">
            </form>