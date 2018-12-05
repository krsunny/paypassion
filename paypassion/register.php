<!DOCTYPE html>
    <html lang="en" class="body-full-height">
        <head>        
            <!-- META SECTION -->
            <title>Paypassion | Register as a gigster</title>            
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />

            <link rel="icon" href="favicon.ico" type="image/x-icon" />
            <!-- END META SECTION -->

            <!-- CSS INCLUDE -->        
            <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
            <link rel="stylesheet" type="text/css" href="assets/fonts/fonts.min.css" />
            <!-- EOF CSS INCLUDE -->                                     
        </head>
        <body>

            <div class="login-container lightmode">

                <div class="login-box animated fadeInDown">
                    <center><h2 style='font-weight:bold; color:#ffffff;'>Paypassion</h2></center>
                    <div class="login-body" id="screen_register">
                        <div class="login-title"><strong>Register</strong> as a Gigster</div>
                        <div class='register_form form-horizontal'>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control reg_input" id='reg_name' placeholder="Full Name"/>
                                <span id='reg_msg1' style='color:red; display:none'> Please enter your Full Name</span>
                                <span id='reg_msg2' style='color:red; display:none'> Your name should be more than 3 characters</span>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control reg_input" id='reg_phone' placeholder="Phone"/>
                                <span id='reg_msg3' style='color:red; display:none'> Please enter your Mobile Number</span>
                                <span id='reg_msg4' style='color:red; display:none'> Enter a valid 10 Digit Mobile Number</span>
                                <span id='reg_msg5' style='color:red; display:none'> Mobile Number Exists</span>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-md-12">
                                <input type="email" class="form-control reg_input" id='reg_email' placeholder="E-mail"/>
                                <span id='reg_msg6' style='color:red; display:none'> Please enter your Email ID</span>
                                <span id='reg_msg7' style='color:red; display:none'> Enter a Valid Email ID</span>
                                <span id='reg_msg8' style='color:red; display:none'> Email Id Exists</span>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" class="form-control reg_input" id='reg_password' placeholder="Password"/>
                                <span id='reg_msg9' style='color:red; display:none'>Please Enter your Password</span>
                                <span id='reg_msg10' style='color:red; display:none'>Your password is not secure</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block" style="height:40px;" id='reg_submit'>Register</button>
                            </div>
                            </br>
                            <center><p style='padding-top:30px;'>By clicking Register I accept <a href='' data-toggle='modal' data-target='#myModal8'>terms & conditions</a></p></center>
                        </div>

                        <div class="login-subtitle">
                            Already have an account? <a href="#" id="login_screen">Login</a>
                        </div>
                        </div>
                    </div>
                    <div class="login-body" id="screen_otp">
                        <div class="login-title"><strong>Verify</strong> Phone number</div>
                        <div class='register_form form-horizontal'>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control otp_input" id='otp' placeholder="Enter OTP here"/>
                                <span id='otp_msg1' style='color:red; display:none'> Please enter OTP</span>
                                <span id='otp_msg2' style='color:red; display:none'> OTP must be 6 numbers</span>
                                <span id='otp_msg3' style='color:red; display:none'>Invalid OTP</span>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block" id='otp_submit'>Verify</button>
                            </div>
                            </br>
                            <!--<center><p style='padding-top:20px;'><a href="" id='resend_otp'>Resend OTP</a></p></center>
                            <center><p style='padding-top:20px; color:blue; display:none;'><a id='otp_msg4'>OTP has been resent</a></p></center>-->
                        </div>

                        </div>
                    </div>
                    <div class="login-body" id="screen_login">
                        <div class="login-title"><strong>Login</strong></div>
                        <div class='register_form form-horizontal'>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control login_input" id='login_phone' placeholder="Phone"/>
                                <span id='login_msg1' style='color:red; display:none'> Please enter your Mobile Number</span>
                                <span id='login_msg2' style='color:red; display:none'> Enter a valid 10 Digit Mobile Number</span>

                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" class="form-control login_input" id='login_password' placeholder="Password"/>
                                <span id='login_msg3' style='color:red; display:none'>Please Enter your Password</span>
                                <span id='login_msg4' style='color:red; display:none'>Your Credentials do not match</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block" style="height:40px;" id='login_submit'>Login</button>
                            </div>
                            </br>
                            <center><p style='padding-top:20px; float:right;'><a id="forgot_password">Forgot Password ?</a></p></center>
                        </div>
                        <div class="login-subtitle">
                            Start as a Gigster! <a href="#" id="register_screen"> Register</a>
                        </div>
                        </div>
                    </div>
                    <div class="login-body" id="screen_forgotpassword">
                        <div class="login-title">Enter your registered Phone number</div>
                        <div class='register_form form-horizontal'>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control forgot_input" id='forgot_phone' placeholder="Enter mobile number"/>
                                <span id='forgot_msg1' style='color:red; display:none'> Please enter Phone Number</span>
                                <span id='forgot_msg2' style='color:red; display:none'> Enter a valid 10 Digit Mobile Number</span>
                                <span id='forgot_msg3' style='color:red; display:none'>Phone Number does not exists</span>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block" id='forgot_submit'>Send OTP</button>
                            </div>
                            </br>
                            <!--<center><p style='padding-top:20px;'><a href="" id='resend_otp'>Resend OTP</a></p></center>
                            <center><p style='padding-top:20px; color:blue; display:none;'><a id='otp_msg4'>OTP has been resent</a></p></center>-->
                        </div>

                        </div>
                    </div>
                    <div class="login-body" id="screen_forgototp">
                        <div class="login-title"><strong>Verify</strong> Phone number</div>
                        <div class='register_form form-horizontal'>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control otp_input" id='otp' placeholder="Enter OTP here"/>
                                <span id='otp_msg1' style='color:red; display:none'> Please enter OTP</span>
                                <span id='otp_msg2' style='color:red; display:none'> OTP must be 6 numbers</span>
                                <span id='otp_msg3' style='color:red; display:none'>Invalid OTP</span>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block" id='otp_submit'>Verify</button>
                            </div>
                            </br>
                            <!--<center><p style='padding-top:20px;'><a href="" id='resend_otp'>Resend OTP</a></p></center>
                            <center><p style='padding-top:20px; color:blue; display:none;'><a id='otp_msg4'>OTP has been resent</a></p></center>-->
                        </div>

                        </div>
                    </div>
                    <div class="login-body" id="screen_reset">
                        <div class="login-title"><strong>Password Reset</strong></div>
                        <div class='register_form form-horizontal'>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control reset_input" id='reset_otp' placeholder="Enter your OTP"/>
                                <span id='reset_msg1' style='color:red; display:none'> Please enter OTP</span>
                                <span id='reset_msg2' style='color:red; display:none'> OTP must be 6 numbers</span>
                                <span id='reset_msg3' style='color:red; display:none'> Invalid OTP</span>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" class="form-control reset_input" id='reset_password' placeholder="Password"/>
                                <span id='reset_msg4' style='color:red; display:none'>Please enter a Password</span>
                                <span id='reset_msg5' style='color:red; display:none'> Your password is not secure</span>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" class="form-control reset_input" id='reset_confirm' placeholder="Confirm Password"/>
                                <span id='reset_msg6' style='color:red; display:none'> Please re-enter your password</span>
                                <span id='reset_msg7' style='color:red; display:none'> Passwords do not match</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block" id='reset_submit'>Submit</button>
                            </div>
                            </br>
                        </div>
                        </div>
                    </div>
                    <div class="login-footer">
                        <div class="pull-left">
                           Powered by CrazyCodez
                        </div>
                        <div class="pull-right">
                            <a href="/#about">About</a> |
                            <a href="#">Privacy</a> |
                            <a href="/#contact">Contact Us</a>
                        </div>
                    </div>
                </div>
    <!--modal for tems and conditions-->
                <div id="myModal8" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
        <!-- Modal content-->

            <div class="modal-content" >
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><h4 class="modal-title">Terms Of Use</h4></center>
                </div>
                    <div class="modal-body" style="overflow: scroll;height: 600px;">

                        <div class="row">
                        <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <p>
    Welcome to Paypassion, an online portal for all the people passionate about their work. By accessing or using the Paypassion website (including the mobile optimized version of the website), online services, mobile and other applications and social networking platforms (each, a "Site"), whether automated or otherwise, you agree to be bound by these Terms of Use, to the collection and use of your information as set forth in our Privacy Policy, which is incorporated herein by reference and located at https://www.paypassion.in/privacy, and any additional terms and conditions that are referenced below or otherwise may apply to specific areas of the Site.
    Please read these Terms of Use carefully before using or accessing the Site. These Terms of Use supersede any prior User Agreement and apply to all the gigsters, visitors and others who access the Service (“Users”). The registered members of Paypassion.in will be referred to herein as “Gigsters”.

    Paypassion Terms of Use
    (User Agreement)<br/>

    The Paypassion website and/or mobile application is owned or operated by Paypassion.in (referred to herein as “Paypassion” or "we" or "us" or "our").<br/>

    Certain features, products or software that you purchase or download from the Site may be subject to additional terms and conditions presented to you at the time that you use, purchase or download them. When you decide to enter a contest or sweepstakes, we present the terms and conditions for the contest or sweepstakes to you. In addition, some areas of the Site are provided by our third party partners and are subject to separate terms and conditions of use, which are posted within those areas. <br/>

    Use of Our Site<br/>

    Paypassion provides a place for Paypassion Users to interact with Gigsters and book those gigsters to provide all of the services needed to host an event. However, Paypassion does not provide any gigster services, nor is it an agent for the gigsters or act as a representative of any User. Therefore, Paypassion has no control over any User’s activity on the Site, including interactions between Users, and we make no representations regarding the quality, accuracy or safety of the services being provided by a gigster or the activities or transactions between Users.<br/>

    You acknowledge that Paypassion is a neutral venue and not a broker, and you are solely responsible for your interactions with other Paypassion Users. We reserve the right, but have no obligation, to monitor disputes between you and other Users. Paypassion shall have no liability for your interactions with other Users, or for any User’s action or inaction.<br/>

    You represent that you are legally able to accept these Terms of Use, and affirm that you are of legal age to form a binding contract, or have obtained parental or guardian consent to do so. If you do not agree to these Terms of Use, you may not use the Site. <br/>

    We reserve the right to change these Terms of Use at any time. Such changes will be effective when posted, provided that we may only amend the alternative dispute resolution, venue and time limit of claims provisions to the extent allowed by applicable law. By continuing to use the Site after we post any such changes, you accept the Terms of Use as modified.<br/>

    NOTE: THIS TERMS OF USE CONTAINS A BINDING ARBITRATION AND CLASS ACTION WAIVER PROVISION IN THE "BINDING ARBITRATION" SECTION BELOW THAT AFFECTS YOUR RIGHTS UNDER THIS TERMS OF USE AND WITH RESPECT TO ANY "DISPUTE" (AS DEFINED BELOW) BETWEEN YOU AND US OR OUR AFFILIATES. YOU HAVE A RIGHT TO OPT OUT OF THE BINDING ARBITRATION AND CLASS ACTION WAIVER PROVISIONS AS FURTHER DESCRIBED IN THE "BINDING ARBITRATION" SECTION BELOW.<br/>

    Rules of Conduct<br/>

    There are rules of conduct that all users and gigsters are required to follow when using the Sites. You must not:<br/>


    "harvest," “scrape” (or collect) information from the Site using an automated software tool or manually on a mass basis (unless we have given you separate written permission to do so). This includes, for example, information about other users of the Site and information about the offerings, products, services and promotions available on or through the Site.<br/>

    use unauthorized automated means to access the Site, or otherwise gain unauthorized access to the Site or to any account or computer system connected to the Site.<br/>

    "stream catch" (download, store or transmit copies of streamed content).<br/>

    obtain, or attempt to obtain, access to areas of the Site or our systems that are not intended for access by you.<br/>

    "flood" the Site with requests or otherwise overburden, disrupt or harm the Site or its systems. (e.g., perform a Denial of Service attack)<br/>

    circumvent or reverse engineer the Site or its systems.<br/>

    restrict or inhibit another user or users from using and enjoying the Site.<br/>

    manipulate or forge identifiers in order to disguise the origin of any information posted on the Site or otherwise provided to us or our employees.<br/>

    impersonate any person, including, but not limited to, other community members or our employees.<br/>

    engage in or promote spamming, chain letters or other unsolicited communications.<br/>

    provide inaccurate, misleading or false information to us.<br/>

    post any content or take any action that may create a risk of harm, loss, physical or mental injury, emotional distress, death, disability, disfigurement, or physical or mental illness to you, to any other person, or to any animal.<br/>

    post any content or take any action that seeks to harm or exploit children by exposing them to inappropriate content, behavior, asking for personally identifiable details or otherwise.<br/>

    post any content or take any action that contains any information, content or behavior that we deem vulgar, obscene, unlawful, harmful, abusive, racially or ethnically offensive, defamatory, infringing, invasive of personal privacy or publicity rights, harassing, high-pressure sales tactics, humiliating to other people (publicly or otherwise), libelous, threatening, profane, or otherwise harmful (to Paypassion, gigsters or other users of the Site).<br/>

    post any content or take any action that contains any information that you know is not correct and current.<br/>

    post any content or take any action that, (or, as a gigster, refuse to provide services for any reason that) is fraudulent, unlawful, threatening, harassing, abusive or discriminatory, including, without limitation, discrimination due to race, color, religion, national origin, age or sexual orientation.<br/>

    post any content or take any action that encourages criminal conduct.<br/>

    post any content or take any action that contains any information (such as inside, proprietary or confidential information) that you do not have a right to make available due to contract, fiduciary duty or operation of law.<br/>

    post any content or take any action that advertises or solicits business for products or services other than those that are offered and promoted on the Site,<br/>

    post any content or take any action that contains or distributes any virus, malware, spyware or other harmful content or code.<br/>

    post any content or take any action that contains any information or content that is illegal, including any information or content that violates regulations promulgated by the Securities and Exchange Commission, or that of any securities exchange, such as the New York Stock Exchange or the NASDAQ Stock Market.<br/>



    You also must comply with all applicable laws and contractual obligations when you use the Site. <br/>

    Ownership of Site Content and Submissions<br/>

    We or our licensors or partners own the intellectual property rights in the content and materials displayed on the Site (“Site Content”). You may use the Site (including any Site Content) for your own personal, non-commercial use, but you may not use it for commercial purposes. You may not modify, copy, reproduce, republish, upload, post, transmit, translate, sell, create derivative works, exploit, or distribute in any manner or medium (including by email or other electronic means) any Site Content unless explicitly authorized in these Terms of Use or by the owner of the materials. You may, however, from time to time, download and/or print one copy of individual pages of the Site for your personal, non-commercial use, provided that you keep intact all copyright and other proprietary notices.<br/>

    If you submit or post any materials or content to the Site, you grant us and our business partners a royalty free, perpetual, irrevocable, transferrable, assignable, sub-licensable, worldwide license to use such materials and content, including alterations thereof, for our business purposes, in any form, in any media, and via any technology we choose, whether it exists now or is created in the future. You represent that any materials and content posted or otherwise submitted by you to the Site is original to you and that you have the right to grant us these rights, the posting and use of your materials and content on or through the Site does not violate, misappropriate or infringe on the rights of any third party, including, without limitation, privacy rights, rights of publicity, copyrights, trademark and/or other intellectual property rights, and that the such posts and the content contained therein abide by the Rules of Conduct set forth in these Terms of Use.<br/> 

    You may choose to or we may invite you to submit comments or ideas about the Sites and our other products and services, including without limitation about how to improve the Sites or our products (“Ideas”). By submitting any Idea, you agree that your disclosure is gratuitous, unsolicited and without restriction and will not place Paypassion under any fiduciary or other obligation, and that we are free to use the Idea without any additional compensation to you, and/or to disclose the Idea on a non-confidential basis or otherwise to anyone. You further acknowledge that, by acceptance of your submission, Paypassion does not waive any rights to use similar or related ideas previously known to Paypassion, or developed by its employees, or obtained from sources other than you.<br/>

    Responsibility for Public Postings and Content<br/>

    Responsibility for what is posted in public areas of the Site lies with each user - you alone are responsible for the material you post or otherwise make available in public areas of the Site. You alone are responsible for assessing the credibility of other user postings. We do not control the material that you or others may post or otherwise make available in such areas, and you understand that we have no obligation to monitor any such material or to edit or delete it. However, we reserve the right to do so. We are not a publisher of user posts and we are not responsible for their accuracy or legality.<br/>

    You also understand and agree that any action or inaction by us or any of our directors, officers, stockholders, employees, consultants, agents or representatives (collectively, "Our Representatives") to prevent, restrict, redress or regulate content, or to implement other enforcement measures against any content, conduct or potential Terms of Use violation is undertaken voluntarily and in good faith, and you expressly agree that neither we nor any of Our Representatives shall be liable to you or anyone else for any action or inaction to prevent, restrict, redress, or regulate content, or to implement other enforcement measures against any content, conduct or potential violation of these Terms of Use.<br/>

    Although Our Representatives may moderate content, conduct and Terms of Use compliance on the Site at our discretion, Our Representatives have no authority to make binding commitments, promises or representations to anyone that they or anyone else on our behalf will "take care" of any alleged problem or complaint, or that they or anyone else on our behalf will otherwise stop, cure or prevent any problem, content, conduct or purported Terms of Use violation from occurring or recurring. Accordingly, you further agree that any representation (written or verbal) by any of Our Representatives (or by anyone else acting on our behalf or by anyone purportedly acting on our behalf) that we (including but not limited to any of Our Representatives, anyone else acting on our behalf, or anyone purportedly acting on our behalf) would or would not prevent, restrict, redress or regulate content (including, without limitation, screen, block, moderate, review, remove, terminate, delete, edit or otherwise stop, cure or exclude any content), or to implement other enforcement measures against any content, conduct or potential or purported Terms of Use violation is superseded by this provision and is nonbinding and unenforceable. Specifically, you agree that we, Our Representatives and anyone else authorized to act on our behalf shall in no circumstance be liable as a result of any representation that we, Our Representative or anyone else on our behalf would or would not restrict or redress any content, conduct or potential or purported Terms of Use violation. This paragraph may not be modified, waived or released except by a written agreement, dated and signed by our Founder and dated and signed by the individual or entity to whom the modification, waiver or release is granted.<br/>

    Registration and Log In<br/>

    To access certain features or areas of the Site, you may be required to provide personal and/or demographic information as part of a registration or log-in process. In addition, certain features of the Site are only available to our registered users, and to access those areas of the Site you will be required to log in using your username and password.<br/>

    You agree to provide true, accurate, current and complete information about yourself as prompted by the applicable registration or log-in form, and you are responsible for keeping such information up-to-date (this includes your contact information, so that we can reliably contact you). The information you submit must describe you (you may not impersonate another person or entity), and you may not sell, share or otherwise transfer your account information.<br/>

    You are responsible for all activity occurring when the Site is accessed through your account, whether authorized by you or not. Therefore, if you create an account, be sure to protect the confidentiality of your account password. We are not liable for any loss or damage arising from your failure to protect your password or account information.<br/>


    Automatic Membership Renewal (“Auto-Renew”).<br/>
    All Paypassion memberships automatically renew for an additional equivalent period at the same term until cancelled by the gigster as provided herein. <br/>
    You may cancel your membership by contacting us and requesting cancellation at info@Paypassion.in.<br/>

    Electronic Communications<br/>

    The communications between you and us via the Site use electronic means, whether you visit the Site or send us an email, or whether we post notices on the Site or communicate with you via email. For contractual purposes, you consent to receive communications from us in an electronic form and you agree that all terms and conditions, agreements, notices, disclosures, and other communications that we provide to you electronically satisfy any legal requirement that such communications would satisfy if it were in writing. The foregoing does not affect your non-waivable rights.<br/>

    Copyright Infringement Notices<br/>

    If you are a copyright owner who believes in good faith that your copyrighted material has been reproduced, posted or distributed on the Site in a manner that constitutes copyright infringement, please inform our designated copyright agent by sending written notice in accordance with the requirements set out here. We have a policy of terminating the Site usage privileges of users who are infringers of intellectual property rights.<br/>

    Changes to the Site<br/>

    We reserve the right to make changes to, or to suspend or discontinue (temporarily or permanently), the Site or any portion of the Site. You agree that we will not be liable to you or to any third party for any such modification, suspension or discontinuance.<br/>

    Suspension or Termination of Access<br/>

    We have the right to deny access to, and to suspend or terminate your access to, the Site, or to any features or portions of the Site, and to remove and discard any content or materials you have submitted to the Site, at any time and for any reason, including for any violation by you of these Terms of Use. In the event that we suspend or terminate your access to and/or use of the Site, you will continue to be bound by the Terms of Use that were in effect as of the date of your suspension or termination.<br/>

    Linking Policies<br/>

    The Site may contain links to other websites or to third party sellers of products and services. Such links are provided for your convenience only, and you access them at your own risk. We are not responsible for, and do not endorse, the content of any such sites, or the products and services sold on them, nor do we take responsibility for the accuracy of any such sites. When you visit a linked site, you should read the terms of use and privacy policy that govern that particular linked site.<br/>

    Indemnification<br/>

    You agree to indemnify, defend and hold us and our affiliates, harmless from and against any claims, liabilities, losses, damages, costs and expenses, including reasonable attorneys' fees, arising from or relating to your use of the Site, your submissions to the Site, or any violation of these Terms of Use, or applicable law, by you or by someone accessing the Site via your account. We reserve the right, at our own expense, to assume the exclusive defense and control of any matter subject to indemnification by you, in which event you agree to cooperate with us in defending such claims. This indemnification, defense and hold harmless obligation will survive these Terms of Use and the termination of your use of the Site.<br/>

    Jurisdictional Issues<br/>

    We control and operate the Site from our facilities in India and, unless otherwise specified, the materials displayed on the Site are presented solely for the purpose of promoting products and services available in India, its territories, possessions and protectorates. We do not represent that materials on the Site are appropriate or available for use in other locations. If you choose to access the Site from other locations, you are responsible for compliance with local laws, if and to the extent local laws are applicable.<br/>

    Applicable Law; No Waiver; Severability<br/>

    These Terms of Use, and the relationship between you and us, will be governed by the laws of India, without giving effect to any principles of conflicts of law. Our failure to exercise or enforce any right or provision of these Terms of Use will not constitute a waiver of such right or provision. If any provision of these Terms of Use is found by a court of competent jurisdiction to be invalid, you and we nevertheless agree that the court should endeavor to give effect to intentions reflected in such provision, and the other provisions of these terms and conditions will remain in full force and effect.<br/>

    Binding Arbitration<br/>

    Other than those matters described under "Exclusions from Arbitration" below, you and we agree that all disputes, claims, or controversies arising out of or relating in any way to these Terms of Use (including the validity, enforceability or scope of this Section), the Site or any content or services thereon (each, a "Dispute"), that cannot be resolved through negotiation in accordance with the "Notice of Dispute; Negotiation" clause below, shall be settled by final binding arbitration, in accordance with the terms of this Section and to the extent permitted by law. Arbitration means that the Dispute will be resolved by a neutral arbitrator instead of in a court by a judge or jury. An arbitrator can award the same damages and relief on an individual basis that a court can award to an individual. You agree that the Indian Penal Code applies to this agreement.<br/>

    Exclusions from Arbitration<br/>

    YOU AND WE AGREE THAT ANY CLAIM FILED BY EITHER PARTY IN SMALL CLAIMS COURT IS NOT SUBJECT TO THE ARBITRATION TERMS CONTAINED IN THIS SECTION. WE ALSO BOTH AGREE THAT YOU OR WE MAY BRING SUIT IN COURT TO ENJOIN INFRINGEMENT OR OTHER MISUSE OF INTELLECTUAL PROPERTY RIGHTS.<br/>

    RIGHT TO OPT OUT OF BINDING ARBITRATION AND CLASS ACTION WAIVER<br/>

    IF YOU DO NOT WISH TO BE BOUND BY THE BINDING ARBITRATION AND CLASS ACTION WAIVER IN THIS SECTION, YOU MUST NOTIFY US IN WRITING WITHIN 30 DAYS OF THE DATE THAT YOU ACCEPT THIS AGREEMENT. YOUR WRITTEN NOTIFICATION MUST BE MAILED TO info@paypassion.in BY CERTIFIED MAIL RETURN RECEIPT REQUESTED AND MUST INCLUDE: (1) YOUR NAME, (2) YOUR ADDRESS, (3) YOUR ACCOUNT INFORMATION, IF YOU HAVE ONE AND (4) A CLEAR STATEMENT THAT YOU DO NOT WISH TO RESOLVE DISPUTES WITH US THROUGH ARBITRATION.<br/>

    Notice of Dispute; Negotiation<br/>

    IF YOU HAVE A DISPUTE WITH US, YOU MUST SEND WRITTEN NOTICE TO LEGAL DEPARTMENT AT THE ADDRESS ABOVE TO GIVE US THE OPPORTUNITY TO RESOLVE THE DISPUTE INFORMALLY THROUGH NEGOTIATION.<br/>

    You agree to negotiate resolution of the Dispute in good faith for no less than sixty (60) days after you provide notice of the Dispute. If we do not resolve your Dispute within sixty (60) days from receipt of notice of the Dispute, either party may pursue a claim in arbitration pursuant to the terms of this Section.<br/>

    Governing Jurisdiction<br/>

    ANY DISPUTE NOT SUBJECT TO ARBITRATION AND NOT INITIATED IN SMALL CLAIMS COURT WILL BE LITIGATED BY EITHER PARTY IN A COURT OF COMPETENT JURISDICTION ONLY IN THE INDIAN COURTS. EACH PARTY SUBMITS TO THE EXCLUSIVE JURISDICTION OF THESE COURTS AND AGREES NOT TO COMMENCE ANY LEGAL ACTION UNDER OR IN CONNECTION WITH THE SUBJECT MATTER OF THIS TERMS OF USE IN ANY OTHER COURT OR FORUM. <br/>
    Disclaimer of Warranties<br/>

    THE SITE AND ITS CONTENT AND ANY SERVICES PROVIDED THEREIN ARE PROVIDED FOR ENTERTAINMENT, EDUCATIONAL AND PROMOTIONAL PURPOSES. WE PROVIDE THE SITE AND ITS CONTENT AND ANY SERVICES, INCLUDING, WITHOUT LIMITATION, ANY SAMPLE DOCUMENT PROVIDED OR GENERATED BY PAYPASSION, ON AN "AS IS" AND "AS AVAILABLE" BASIS, WITHOUT WARRANTY OF ANY KIND WHETHER EXPRESS OR IMPLIED (INCLUDING WARRANTIES OF MERCHANTABILITY, FITNESS FOR ANY PARTICULAR PURPOSE AND NON-INFRINGEMENT). THIS MEANS THAT WE MAKE NO PROMISES THAT:<br/>

    THE SITE WILL BE AVAILABLE AT ANY PARTICULAR TIME,<br/>

    THE SITE WILL MEET ANY PARTICULAR REQUIREMENTS OR PROVIDE ANY PARTICULAR RESULTS,<br/>

    THE INFORMATION ON THE SITE WILL BE ACCURATE OR UP-TO-DATE,<br/>

    THE SITE OR THE INFORMATION TRANSMITTED TO OR FROM IT OR STORED ON IT WILL BE SECURE FROM UNAUTHORIZED ACCESS,<br/>

    INFORMATION AND MATERIALS THAT YOU STORE IN YOUR ACCOUNT OR ON THE SITE WILL REMAIN RETRIEVABLE AND UNCORRUPTED (UNLESS WE PROMISE THIS IN A SEPARATE AGREEMENT WITH YOU),<br/>

    OR THE SITE WILL BE UNINTERRUPTED OR ERROR-FREE OR WILL BE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS, OR THAT DEFECTS WILL BE CORRECTED.<br/>


    THE SITE AND ITS CONTENT AND ANY SERVICES PROVIDED THEREIN ARE NOT INTENDED TO, AND DO NOT, CONSTITUTE MEDICAL OR HEALTHCARE ADVICE OR DIAGNOSIS, AND MAY NOT BE USED FOR SUCH PURPOSES. YOU SHOULD ALWAYS CONSULT WITH A QUALIFIED PHYSICIAN OR OTHER HEALTHCARE PROVIDER ABOUT YOUR SPECIFIC CIRCUMSTANCES, INCLUDING BEFORE STARTING ANY TREATMENT, MEDICAL OR OTHERWISE.<br/>

    WE LIKEWISE MAKE NO WARRANTIES OR REPRESENTATIONS REGARDING ANY PRODUCTS OR SERVICES ORDERED OR PROVIDED VIA THE SITE. ANY PRODUCTS AND SERVICES ORDERED OR PROVIDED VIA THE SITE ARE PROVIDED "AS IS", EXCEPT TO THE EXTENT, IF AT ALL, OTHERWISE SET FORTH IN A SEPARATE AGREEMENT ENTERED INTO BETWEEN YOU AND US OR BETWEEN YOU AND A THIRD PARTY.<br/>

    IF YOU PURCHASE A PRODUCT OR SERVICE FROM A THIRD PARTY AFTER FOLLOWING AN AD OR LINK ON THE SITE, THE TERMS OF SALE FOR YOUR PURCHASE ARE BETWEEN YOU AND THE THIRD PARTY FROM WHOM YOU MADE THE PURCHASE. WE ARE NOT RESPONSIBLE FOR SUCH THIRD PARTY PRODUCTS OR SERVICES OR FOR DISPUTES BETWEEN YOU AND THEIR SELLERS.<br/>

    YOU AGREE THAT USE OF THE SITE IS AT YOUR OWN RISK. ALTHOUGH WE TRY TO ENSURE THAT THE INFORMATION POSTED ON THE SITE IS ACCURATE AND UP-TO-DATE, WE RESERVE THE RIGHT TO CHANGE OR MAKE CORRECTIONS TO ANY OF THE INFORMATION (INCLUDING PRICING) AT ANY TIME. WE CANNOT, AND DO NOT, GUARANTEE THE CORRECTNESS, TIMELINESS, PRECISION, THOROUGHNESS OR COMPLETENESS OF ANY OF THE INFORMATION AVAILABLE ON THE SITE, NOR WILL WE BE LIABLE FOR ANY INACCURACY OR OMISSION CONCERNING ANY OF THE INFORMATION PROVIDED ON THE SITE. NO ADVICE, RESULTS OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY YOU FROM US OR THROUGH THE SITE SHALL CREATE ANY WARRANTY NOT EXPRESSLY MADE HEREIN. WE HEREBY DISCLAIM, AND YOU HEREBY WAIVE, ANY AND ALL WARRANTIES AND REPRESENTATIONS MADE IN PRODUCT OR SERVICES LITERATURE, FREQUENTLY ASKED QUESTIONS DOCUMENTS, SUPPORT DOCUMENTATION, BY OUR CUSTOMER SERVICE AND SUPPORT AGENTS, AND OTHERWISE ON THE SITE OR IN CORRESPONDENCE WITH US OR OUR AGENTS. WE ARE NOT RESPONSIBLE FOR ANY CONTENT OR MATERIALS POSTED TO THE SITE BY USERS, NOR FOR DISPUTES BETWEEN USERS, OR BETWEEN USERS AND THIRD PARTIES.<br/>

    THESE DISCLAIMERS APPLY TO US AS WELL AS THIRD PARTIES THAT ARE INVOLVED IN THE CREATION, PRODUCTION OR DISTRIBUTION OF THE SITE, AND ANY OF THEIR EMPLOYEES AND AGENTS.<br/>

    Limitations of Liability<br/>

    IF YOU ARE DISSATISFIED WITH THE SITE, OR ANY MATERIALS, PRODUCTS, OR SERVICES ON THE SITE, OR WITH ANY OF THE SITE'S TERMS OF USE, YOUR SOLE AND EXCLUSIVE REMEDY IS TO DISCONTINUE USING THE SITE.<br/>

    IN NO EVENT WILL WE, OUR PARENT ENTITY, OR ANY OF OUR RESPECTIVE SUBSIDIARIES OR AFFILIATES, OR ANY OF OUR OR THEIR DIRECTORS, OFFICERS, EMPLOYEES, AGENTS OR CONTENT OR SERVICE PROVIDERS, BE LIABLE FOR ANY DAMAGES (INCLUDING, WITHOUT LIMITATION, DIRECT, INDIRECT, SPECIAL, INCIDENTAL, CONSEQUENTIAL, EXEMPLARY OR PUNITIVE DAMAGES) ARISING FROM, OR DIRECTLY OR INDIRECTLY RELATED TO, THE USE OF, OR THE INABILITY TO USE, THE SITE (OR THE CONTENT, MATERIALS AND FUNCTIONS PROVIDED AS PART OF THE SITE), WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE, OR STRICT LIABILITY, EVEN IF WE KNEW, SHOULD HAVE KNOWN OR HAD BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. NOTWITHSTANDING AND WITHOUT LIMITING THE FOREGOING, YOU AGREE THAT OUR LIABILITY AND THE LIABILITY OF OUR AFFILIATES, AND OF ANY OF OUR OR THEIR DIRECTORS, OFFICERS, EMPLOYEES, AGENTS OR CONTENT OR SERVICE PROVIDERS, IF ANY, ARISING OUT OF ANY KIND OF LEGAL CLAIM IN ANY WAY RELATING TO THE USE OF THE SITE. BECAUSE SOME STATES DO NOT ALLOW THE EXCLUSION OR LIMITATION OF CERTAIN CATEGORIES OF DAMAGES, THE ABOVE LIMITATIONS MAY NOT APPLY TO YOU. IN SUCH STATES, OUR LIABILITY AND THE LIABILITY OF OUR AFFILIATES, AND OUR AND THEIR DIRECTORS, OFFICERS, EMPLOYEES, AGENTS OR CONTENT OR SERVICE PROVIDERS, IS LIMITED TO THE FULLEST EXTENT PERMITTED BY SUCH STATE LAW.<br/>

    Other<br/>

    These Terms of Use and any additional terms and conditions that are referenced herein or otherwise may apply to specific areas of the Site, constitute the entire agreement between us and you with respect to the Site. This agreement is personal to you and you may not assign it to anyone.<br/>

    If any provision of these Terms of Use is found to be unlawful, void or for any reason unenforceable, then that provision will be deemed severable from these Terms of Use and will not affect the validity and enforceability of any remaining provisions. These Terms of Use are not intended to benefit any third party, and do not create any third party beneficiaries. Accordingly, these Terms of Use may only be invoked or enforced by you or us.<br/>

    YOU AGREE THAT REGARDLESS OF ANY LAW TO THE CONTRARY (INCLUDING ANY RELEVANT STATUTES OF LIMITATION), ANY CLAIM OR CAUSE OF ACTION THAT YOU MAY HAVE ARISING OUT OF OR RELATED TO USE OF THE SITE, OR THESE TERMS OF USE, MUST BE FILED BY YOU WITHIN ONE YEAR AFTER SUCH CLAIM OR CAUSE OF ACTION ACCRUED OR BE PERMANENTLY BARRED.<br/>

    Last Updated: November 14, 2017
     </p>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>

                </div>
            </div>

    </div>
             <!-- START PLUGINS -->
            <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
            <script>
            $(document).ready(function(){
                $("#screen_otp").hide();
                $("#screen_login").hide();
                $("#screen_forgotpassword").hide();
                $("#screen_forgototp").hide();
                $("#screen_reset").hide();

                $("#login_screen").on("click", function(){
                    $("#screen_register").hide();
                    $("#screen_login").show();
                });
                $("#register_screen").on("click", function(){
                    $("#screen_login").hide();
                    $("#screen_register").show();
                })
                $(".reg_input").focus(function(){
                    $("#reg_msg1").hide();
                    $("#reg_msg2").hide();
                    $("#reg_msg3").hide();
                    $("#reg_msg4").hide();
                    $("#reg_msg5").hide();
                    $("#reg_msg6").hide();
                    $("#reg_msg7").hide();
                    $("#reg_msg8").hide();
                    $("#reg_msg9").hide();
                    $("#reg_msg10").hide();
                });
                $("#reg_submit").click(function(){
                    var reg_name = $("#reg_name").val();
                    var reg_phone = $("#reg_phone").val();
                    var reg_email = $("#reg_email").val();
                    var reg_password = $("#reg_password").val();
                    var a = reg_email.indexOf("@");
                    var b = reg_email.lastIndexOf(".");

                    if(reg_name==''){$("#reg_msg1").show();}
                    else if(reg_name.length<3){$("#reg_msg2").show();}
                    else if(reg_phone == ''){$("#reg_msg3").show();}
                    else if(reg_phone.length != 10 ){$("#reg_msg4").show();}
                    else if(reg_email == ''){$("#reg_msg6").show();}
                    else if(a<1 || b<a+2 || b+2 == reg_email.length){$("#reg_msg7").show();}
                    else if(reg_password == ''){$("#reg_msg9").show();}
                    else if(reg_password.length < 6){$("#reg_msg10").show();}
                    else{			 $.ajax({
                      url:"api/register_api.php",
                      data:"action=register&reg_phone="+reg_phone+"&reg_name="+reg_name+"&reg_email="+reg_email+"&reg_password="+reg_password,
                      method:"POST",
                      dataType:"json"
                            }).done(function(data){
                                if(data.status=='failure' && data.message=='Phone Number Exist'){
                                    $("#reg_msg5").show();
                                }
                                else if(data.status=='failure' && data.message=='Email Exist'){
                                    $("#reg_msg8").show();
                                }
                                else{
                                    window.localStorage.setItem("reg_phone",data.response.reg_phone);
                                    $("#screen_register").hide();
                                    $("#screen_otp").show();
                                }
                          }); }
                });
                $(".otp_input").focus(function(){
                    $("#otp_msg1").hide();
                    $("#otp_msg2").hide();
                    $("#otp_msg3").hide();
                });
                $("#otp_submit").click(function(){
                    var otp_phone=window.localStorage.getItem("reg_phone");
                    var otp = $("#otp").val();
                    if(otp==''){$("#otp_msg1").show();}
                    else if(otp.length!=6){$("#otp_msg2").show();}
                    else{			 
                    $.ajax({
                      url:"api/register_api.php",
                      data:"action=otp_verify&otp_phone="+otp_phone+"&otp="+otp,
                      method:"POST",
                      dataType:"json"
                            }).done(function(data){
                                if(data.status=='failure' && data.message=='otp does not match'){
                                    $("#otp_msg3").show();
                                }
                                else{
                                    $("#screen_otp").hide();
                                    $("#screen_login").show();
                                }
                          }); }
                });
                $("#resend_otp").click(function(){
                    var resend_phone=window.localStorage.getItem("reg_phone");
                    $.ajax({
                      url:"api/register_api.php",
                      data:"action=resend_otp&resend_phone="+resend_phone,
                      method:"POST",
                      dataType:"json"
                            }).done(function(data){
                                if(data.status=='success'){
                                    $("#otp_msg4").show();
                                    $("#resend_otp").hide();
                                }
                          }); 
                });
                $(".login_input").focus(function(){
                    $("#login_msg1").hide();
                    $("#login_msg2").hide();
                    $("#login_msg3").hide();
                    $("#login_msg4").hide();
                });
                $("#login_submit").click(function(){
                    console.log("submit clicked...");
                    var login_phone = $("#login_phone").val();
                    var login_password = $("#login_password").val();
                    if(login_phone==''){$("#login_msg1").show();}
                    else if(login_phone.length!=10){$("#login_msg2").show();}
                    else if(login_password == ''){$("#login_msg3").show();}
                    else{			 
                        console.log("AJAX started...");
                        $.ajax({
                      url:"api/login_api.php",
                      data:"action=login&login_phone="+login_phone+"&login_password="+login_password,
                      method:"POST",
                      dataType:"json"
                            }).done(function(data){
                                console.log(data);
                                if(data.status=='failure' && data.messsage=='invalid credentials'){
                                    $("#login_msg4").show();
                                }
                                else if(data.status=='failure' && data.message=='user not verified'){
                                    $("#screen_login").hide();
                                    $("#screen_otp").show();
                                }else if (data.status=="success"){
                                    console.log(data);
                                    window.localStorage.setItem("reg_phone",data.response.view_phone);
                                    window.location = "home.php";
                                }
                          }); }
                });
                $("#forgot_submit").click(function(){
                    var forgot_phone=$('#forgot_phone').val();
                    if(forgot_phone==''){$("#forgot_msg1").show();}
                    else if(forgot_phone.length!=10){$("#forgot_msg2").show();}
                    else{			 
                    $.ajax({
                      url:"api/login_api.php",
                      data:"action=forgot&forgot_phone="+forgot_phone,
                      method:"POST",
                      dataType:"json"
                            }).done(function(data){
                                if(data.status=='failure'){
                                    $("#forgot_msg3").show();
                                }
                                else{
                                    window.localStorage.setItem("forgot_phn",data.response.forgot_phn);
                                    $("#screen_forgotpassword").hide();
                                    $("#screen_reset").show();
                                }
                          }); }
                });
                $("#forgot_password").click(function(){
                    $("#screen_login").hide();
                    $("#screen_forgotpassword").show();
                });
                $(".reset_input").focus(function(){
                    $("#reset_msg1").hide();
                    $("#reset_msg2").hide();
                    $("#reset_msg3").hide();
                    $("#reset_msg4").hide();
                    $("#reset_msg5").hide();
                    $("#reset_msg6").hide();
                    $("#reset_msg7").hide();
                });
                $("#reset_submit").click(function(){
                var reset_phone=window.localStorage.getItem("forgot_phn");
                var reset_otp = $("#reset_otp").val();
                var reset_password = $("#reset_password").val();
                var reset_confirm = $("#reset_confirm").val();
                if(reset_otp==''){$("#reset_msg1").show();}
                else if(reset_otp.length!=6){$("#reset_msg2").show();}
                else if(reset_password==""){$("#reset_msg4").show();}
                else if(reset_password.length<6){$("#reset_msg5").show();}
                else if(reset_confirm==""){$("#reset_msg6").show();}
                else if(reset_confirm!=reset_password){$("#reset_msg7").show();}
                else{			 
                $.ajax({
                  url:"api/login_api.php",
                  data:"action=reset_password&forgot_phone="+reset_phone+"&forgot_otp="+reset_otp+"&forgot_password="+reset_password,
                  method:"POST",
                  dataType:"json"
                        }).done(function(data){
                            if(data.status=='failure'){
                                $("#reset_msg3").show();
                            }
                            else{
                                $("#screen_reset").hide();
                                $("#screen_login").show();
                            }
                      }); }
            });
                if(window.localStorage.getItem('reg_phone')){
                      window.location.assign('home.php');
                }else{
                }
            });

            </script>
            <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
            <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
            <!-- END PLUGINS -->

        </body>
    </html>






