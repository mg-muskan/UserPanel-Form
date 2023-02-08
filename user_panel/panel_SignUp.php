<!-- UserPanel Header page -->
<?php
include "include/userpanel-header.php";
?>
<!-- End UserPanel Header page -->

<!-- start signup form here -->
<section id="user-signup-form-sec">
    <div class="container">
        <div class="sign-panel-logoicon">
            <a href="../index.php">
                <img src="../img/logo/jibran.png" alt="" class="img-responsive" width="40px" height="40px">
                <h2>Endiavolve</h2>
            </a>   
        </div>
        <div class="row user-signup-panel">
            <div class="col-md-4 signup-panel-left-box">
                <label>Already signed up ?</label>
                <p>All users on Endiavolve will know that there are millions of people out there. Every day besides so many people joining this community.</p>
                <div class="login-signup-left-btn">
                    <a href="index.php">
                        <i class="fa-solid fa-sign-in"></i>SignIn
                    </a>
                </div>
            </div>
            <div class="col-md-8 signup-panel-user-box">
                <div class="signup-panel-heading">
                    <h1 class="user-sign">SignUp</h1>
                </div>
                <form action="#">
                    <div class="signup-penel-content-info form-group">

                        <div class="signup-panel-input-form-box">
                            <label for="fname">First Name<span class="signup-panel-form-req">*</span> :</label>
                            <input type="text" class="fname form-control" name="fname" id="fname" placeholder="First Name" 
                                required oninvalid="this.setCustomValidity('Please enter your first name')" oninput="this.setCustomValidity('')">
                        </div>

                        <div class="signup-panel-input-form-box">
                            <label for="lname">Last Name<span class="signup-panel-form-req">*</span> :</label>
                            <input type="text" class="lname form-control" name="lname" id="lname" placeholder="Last Name" 
                                required oninvalid="this.setCustomValidity('Please enter your last name')" oninput="this.setCustomValidity('')">
                        </div>

                        <div class="signup-panel-input-form-box">
                            <label for="email">E-mail<span class="signup-panel-form-req">*</span> :</label>
                            <input type="Email" class="email form-control" name="email" id="email" placeholder="E-mail" 
                                required oninvalid="this.setCustomValidity('Please enter your Email Id')" oninput="this.setCustomValidity('')">
                        </div>

                        <div class="signup-panel-input-form-box">
                            <label for="mobi">Mobile Number<span class="signup-panel-form-req">*</span> :</label>
                            <input type="number" class="mobi form-control" name="mobi" id="mobi" placeholder="Mobile Number" 
                                required maxlength="10" oninvalid="this.setCustomValidity('Please enter your number')"
                                oninput="this.setCustomValidity(''); if (this.value.length > this.maxLength) 
                                this.value = this.value.slice(0, this.maxLength);">
                        </div>

                        <div class="signup-panel-input-form-box">
                            <label for="branch">University<span class="signup-panel-form-req">*</span> :</label>
                            <select name="" class="form-control signup-panel-form-uni" id="branch" required
                                oninvalid="this.setCustomValidity('Please select your University')" 
                                oninput="this.setCustomValidity('')">
                                <option value="" selected disabled>Select University</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="uni-other">Other</option>
                            </select>

                            <input type="text" class="signup-panel-form-other form-control" id="uniName" placeholder="Enter your University Name">
                        </div>

                        <div class="signup-panel-input-form-box form-group">
                            <label for="course">Course<span class="signup-panel-form-req">*</span> :</label>
                            <select class="form-control" id="course" required
                                oninvalid="this.setCustomValidity('Please select your Course')" 
                                oninput="this.setCustomValidity('');">
                                <option value="" selected disabled>Select course</option>
                                <option value="">BE</option>
                                <option value="">BTech</option>
                                <option value="course-other">Other</option>
                            </select>

                            <input type="text" class="signup-panel-form-other form-control" id="courseName" placeholder="Enter your Course Name">
                        </div>

                        <div class="signup-panel-input-form-box form-group">
                            <label for="branch">Branch<span class="signup-panel-form-req">*</span> :</label>
                            <select class="form-control" id="branch" required
                                oninvalid="this.setCustomValidity('Please select your Branch')" 
                                oninput="this.setCustomValidity('');">
                                <option value="" selected disabled>Select Branch</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>

                        <div class="signup-panel-input-form-box form-group">
                            <label for="semester">Semester<span class="signup-panel-form-req">*</span> :</label>
                            <select class="form-control" id="semester" required
                                oninvalid="this.setCustomValidity('Please select your semester')" 
                                oninput="this.setCustomValidity('');">
                                <option value="" selected disabled>Select Semester</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>

                        <div class="signup-panel-input-form-box">
                            <label for="dob">Date of Birth<span class="signup-panel-form-req">*</span> :</label>
                            <input type="date" class="dob form-control" name="dob" id="dob" placeholder="DOB" required max="2010-12-31"
                                oninvalid="this.setCustomValidity('Enter your Date of Birth')" oninput="this.setCustomValidity('')">
                        </div>

                        <div class="signup-panel-input-form-box">
                            <label for="pass">Password<span class="signup-panel-form-req">*</span> :</label>
                            <input type="password" class="pass form-control" name="pass" id="pass" placeholder="Password" required oninput="passValidate()">
                            <span class="signup-panel-pass-error" id="pass-message"></span>
                        </div>

                        <div class="signup-panel-input-form-box">
                            <label for="cpass">Confirm Password<span class="signup-panel-form-req">*</span> :</label>
                            <input type="password" class="cpass form-control" name="cpass" id="cpass" placeholder="Confirm Password" required oninput="passValidate()">
                            <span class="signup-panel-pass-error" id="cpass-message"></span>
                        </div>

                        <div class="signup-panel-input-form-box">
                            <span class="gender-title">Gender<span class="signup-panel-form-req">*</span> :</span>
                            <div class="gender-category">
                                <br><input type="radio" name="gender" id="male" checked>
                                <label for="male">Male</label>
                                <input type="radio" name="gender" id="female">
                                <label for="female">Female</label>
                                <input type="radio" name="gender" id="other">
                                <label for="other">Other</label>
                            </div>
                        </div>

                        <!-- <div class="signup-panel-input-form-box">
                            <label for="ufile">Upload File :</label>
                            <input type="file" class="ufile form-control" name="ufile" id="ufile" placeholder="Upload file">
                        </div> -->

                        <div class="signup-panel-form-submit-btn">
                            <input type="submit" value="submit" class="btn-royal" name="subbtn">
                        </div>

                        <!-- <div class="signup-panel-form-submit-error">
                            <span id="submitError">Hello</span>
                        </div> -->

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END signup form here -->

<script>

    $(".signup-panel-form-uni").on('change', function() {
        const uniName = document.getElementById("uniName");
        if(this.value == "uni-other") {
            uniName.classList.add("active");
        }
        else {
            uniName.classList.remove("active");
        }
    });

    $("#course").on('change', function() {
        const courseName = document.getElementById("courseName");

        if(this.value == "course-other") {
            courseName.classList.add("active");
        }
        else {
            courseName.classList.remove("active");
        }
    });

    function passValidate() {
        const pass = document.getElementById("pass");
        const cpass = document.getElementById("cpass");
        const perror = document.getElementById("pass-message");
        const cperror = document.getElementById("cpass-message");
        const error = document.getElementById("submitError");
        if(pass.value.length < 8) {
            perror.innerHTML = "Password cannot be less than 8 characters";
            cperror.innerHTML = "";
        }
        else if(pass.value != cpass.value && cpass.value != '') {
            perror.innerHTML = "";
            cperror.innerHTML = "Please check your password";
        }
        else {
            perror.innerHTML = "";
            cperror.innerHTML = "";
        }
    }

</script>

<!-- UserPanel Footer page -->
<?php
include "include/userpanel_footer.php";
?>
<!-- End UserPanel Footer page -->