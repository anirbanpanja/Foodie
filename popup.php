<!-- Popup -->
<section id="popup1" class="overlay">
        <div class="popup--content">
            <div class="agile_info">
                <!-- Content -->
                <div class="w3_info">
                    <h2>Signup Here</h2>
                    <form name="signup" action="/signup" method="post">
                        <div class="left margin">
                            <label>First Name</label>
                            <div class="input-group" title="First name must be under 25 character">
                                <span><i class="fas fa-user-tie" aria-hidden="true"></i></span>
                                <input type="text" name="firstname" placeholder="First Name" class="f-name" id="fname" autocomplete="off" maxlength="25" required />
                            </div>
                        </div>
                            <div class="left">
                                <label>Last Name</label>
                                <div class="input-group" title="Last name must be under 25 character">
                                    <span><i class="fas fa-user-tie" aria-hidden="true"></i></span>
                                    <input type="text" name="lastname" placeholder="Last Name" class="l-name" id="lname" autocomplete="off" maxlength="25" required />
                                </div>
                            </div>
                            <div class="left margin">
                                <label>Date of Birth</label>
                                <div class="input-group" title="Keyboard input is disabled, You have to select date from Date Picker & minimum date will be 01-01-1955">
                                    <span><i class="fas fa-calendar-week" aria-hidden="true"></i></span>
                                    <input type="date" name="dateofbirth" min="1955-01-01" max="2002-12-31" class="d-o-b" id="dob" onkeydown="return false" required />
                                </div>
                            </div>
                            <div class="left">
                                <label>Gender</label>
                                <div class="input-group" title="Gender must be in these three cateories">
                                    <span><i class="fas fa-transgender-alt" aria-hidden="true"></i></span>
                                    <select name="usergender" class="gender" id="u-gen" required>
                                        <option value="" disabled selected>Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Other's</option>
                                    </select>
                                </div>
                            </div>
                            <div class="left margin">
                                <label>Email Address</label>
                                <div class="input-group" title="Email id must be this type like - abc@xyz.com">
                                    <span><i class="fas fa-envelope-open" aria-hidden="true"></i></span>
                                    <input type="email" placeholder="abc.d-e@gmail.com" name="emailaddress" class="email-id" id="email" autocomplete="off" 
                                    pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" onchange="validateEmail(email)" required />
                                    <i id="email-check" class="" onclick="resetEmail(email)"></i>
                                </div>
                            </div>
                            <div class="left">
                                <label>Phone Number</label>
                                <div class="input-group" title="Phone number must be allowed under 10 Numeric digit">
                                    <span><i class="fas fa-phone-alt" aria-hidden="true"></i></span>
                                    <input type="tel" name="phonenumber" placeholder="7 988 855 566" class="phone-id" id="phone" autocomplete="off" maxlength="10" onchange="validatePhone(phone)" pattern="^\+?([7-9]{1})\)?[-. ]?([0-9]{9})$" required />
                                    <i id="phone-check" class="" onclick="resetPhone(phone)"></i>
                                </div>
                            </div>
                            <div class="left margin">
                                <label id="passLabel">Password</label>
                                <div class="input-group" title="Must contain at least one Lowercase, Uppercase, Numeric digit and must be under 8 to 15 character || No special character allowed">
                                    <span><i id="pass-strength" class="fa fa-lock" aria-hidden="true"></i></span>
                                    <input type="password" name="userpassword" placeholder="abc XYZ 701" class="user-pass" id="u-pass" minlength="8" maxlength="15" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}" required />
                                </div>
                            </div>
                            <div class="left">
                                <label id="labelConfirm">Confirm Password</label>
                                <div class="input-group" title="Same as password">
                                    <span><i id="pass-eye" class="fa fa-eye" aria-hidden="true" onClick="viewPassword()"></i></span>
                                    <input type="password" placeholder="abc XYZ 701" class="user-pass-confirm" name="userpasswordconfirm" id="u-pass-confirm" minlength="8" maxlength="15" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}" required />
                                    <i id="pass-check" class=""></i>
                                </div>
                            </div>
                            <button class="btn-form btn-danger btn-block" type="submit" name="sumbit" value="Signup">
                                Signup Now <i class="fas fa-chevron-right" aria-hidden="true"></i>
                            </button>           
                        </form>
                </div>
                <div class="w3l_form">
                    <div class="left_grid_info">
                        <h3>Already Registered?</h3><br />
                        <p class="register-text">So, Here You Can Login Normally Or With Your Google &amp; Facebook Account And These Need Special Permission To Accounts</p>
                        <a href="#" class="btn-form btn-with-1">LOGIN <i class="fas fa-chevron-right" aria-hidden="true"></i></a>
                        <a href="#" class="btn-form btn-with-2">Google  <i class="fab fa-google" aria-hidden="true"></i></a>
                        <a href="#" class="btn-form btn-with-3">Facebook  <i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>          

            <!-- Popup Close Button -->
            <a class="popup-close" href="#">
                <button class="ebook-cls-btn">X</button>
            </a>
        </div>
    </section>