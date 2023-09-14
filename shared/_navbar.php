<?php
function PageName() {
    return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}
$current_page = PageName();

function navBar(){
    echo('
            <div class="header">
                <div class="container">
                    <div class="header__wrap">
                        <a class="header__logo header__logo--mobile" href="/">
                            <img src="public/img/logo_ssed_lab_white.png" alt="">Home
                        </a>
                        <a class="header__logo" href="/"><img src="public/img/logo_ssed_lab_white.png" alt=""></a>
                        <div class="header__menu_button"> <span></span><span></span></div>
                        <div class="header__mobile_menu">
                            <ul class="header__menu">
                                <li class="dropdown" ><a class="header__menu_item" href="#"><span>Solutions</span></a>
                                    <ul class="parent">
                                        <li class="child dropdown" ><a class="header__menu_item" href="#"><span>Data</span></a>
                                            <!-- <ul class="sub__parent">
                                                <li class="sub__child"><a class="header__menu_item" href="#"><span>Data Analytics</span></a></li>
                                                <li class="sub__child"><a class="header__menu_item" href="#"><span>Data Architecture</span></a></li>
                                                <li class="sub__child"><a class="header__menu_item" href="#"><span>Data Engineering</span></a></li>
                                                <li class="sub__child"><a class="header__menu_item" href="#"><span>Data Management</span></a></li>
                                                <li class="sub__child"><a class="header__menu_item" href="#"><span>Data Migration</span></a></li>
                                                <li class="sub__child"><a class="header__menu_item" href="#"><span>Data Integration</span></a></li>
                                                <li class="sub__child"><a class="header__menu_item" href="#"><span>Data Science</span></a></li>
                                                <li class="sub__child"><a class="header__menu_item" href="#"><span>Data Warehouse</span></a></li>
                                                <li class="sub__child"><a class="header__menu_item" href="#"><span>Data Visualization</span></a></li>
                                                <li class="sub__child"><a class="header__menu_item" href="#"><span>Business Intelligence</span></a></li>
                                                <li class="sub__child"><a class="header__menu_item" href="#"><span>Enterprise Data Platform</span></a></li>
                                            </ul> -->
                                        </li>
                                        <li class="child" ><a class="header__menu_item" href="#"><span>Artificial Intelligence</span></a>
                                            <!-- <ul>
                                                <li><a class="header__menu_item" href="#"><span>AI for Education</span></a></li>
                                                <li><a class="header__menu_item" href="#"><span>AI for Healthcate</span></a></li>
                                                <li><a class="header__menu_item" href="#"><span>AI for Retail</span></a></li>
                                                <li><a class="header__menu_item" href="#"><span>Anomaly Detection</span></a></li>
                                                <li><a class="header__menu_item" href="#"><span>Chatbot Development</span></a></li>
                                                <li><a class="header__menu_item" href="#"><span>Computer Vision</span></a></li>
                                                <li><a class="header__menu_item" href="#"><span>Deep Learning</span></a></li>
                                                <li><a class="header__menu_item" href="#"><span>Generative AI</span></a></li>
                                                <li><a class="header__menu_item" href="#"><span>Machine Learning</span></a></li>
                                                <li><a class="header__menu_item" href="#"><span>NLP</span></a></li>
                                            </ul> -->
                                        </li>
                                        <li class="child" ><a class="header__menu_item" href="#"><span>Automation</span></a>
                                            <!-- <ul>
                                                <li><a class="header__menu_item" href="#"><span>RPA</span></a></li>
                                            </ul> -->
                                        </li>
                                        <li class="child" ><a class="header__menu_item" href="#"><span>Blockchain</span></a>
                                            <!-- <ul>
                                                <li><a class="header__menu_item" href="#"><span>Smart Contract</span></a></li>
                                            </ul> -->
                                        </li>
                                        <li class="child" ><a class="header__menu_item" href="#"><span>Extended Reality</span></a>
                                            <!-- <ul>
                                                <li><a class="header__menu_item" href="#"><span>Augmented Reality</span></a></li>
                                                <li><a class="header__menu_item" href="#"><span>Virtual Reality</span></a></li>
                                                <li><a class="header__menu_item" href="#"><span>Metaverse</span></a></li>
                                            </ul> -->
                                        </li>
                                        <li class="child" ><a class="header__menu_item" href="#"><span>Internet of Things</span></a>
                                            <!-- <ul>
                                                <li><a class="header__menu_item" href="#"><span>Embedded Software</span></a></li>
                                                <li><a class="header__menu_item" href="#"><span>Industrial IoT</span></a></li>
                                                <li><a class="header__menu_item" href="#"><span>Medical IoT</span></a></li>
                                            </ul> -->
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="header__menu_item" href="#"><span>Services</span></a>
                                    <ul class="parent">
                                        <li class="child"><a class="header__menu_item" href="#">Mobile</a>
                                            <!-- <ul class="">
                                                <li ><a href="#">Android</a></li>
                                                <li ><a href="#">iOS</a></li>
                                                <li ><a href="#">Cross-Platform</a></li>
                                            </ul> -->
                                        </li>
                                        <li class="child" ><a class="header__menu_item" href="#">Web</a></li>
                                        <li class="child" ><a class="header__menu_item" href="services_saas-development.php">SaaS</a></li>
                                        <li class="child" ><a class="header__menu_item" href="#">Back-End</a></li>
                                        <li class="child" ><a class="header__menu_item" href="#">Cloud &amp; DevOps</a>
                                            <!-- <ul class="sub-menu subsub">
                                                <li><a href="#">Cloud Migration</a></li>
                                                <li><a href="#">DevOps</a></li>
                                                <li><a href="#">Kubernetes</a></li>
                                            </ul> -->
                                        </li>
                                        <li class="child" ><a class="header__menu_item" href="#">Dedicated Team</a>
                                            <!-- <ul class="sub-menu subsub">
                                                <li><a href="#">CTO as a Service</a></li>
                                                <li><a href="#">Angular Development</a></li>
                                                <li><a href="#">Java Development</a></li>
                                                <li><a href="#">.NET Development</a></li>
                                                <li><a href="#">Node.js Development</a></li>
                                            </ul> -->
                                        </li>
                                        <li class="child" ><a class="header__menu_item" href="#">QA &amp; Testing</a>
                                            <!-- <ul class="sub-menu subsub">
                                                <li><a href="#">Automation Testing</a></li>
                                                <li><a href="#">Manual Testing</a></li>
                                                <li><a href="#">Mobile  Testing</a></li>
                                                <li><a href="#">Web Testing</a></li>
                                            </ul> -->
                                        </li>
                                        <li class="child"><a class="header__menu_item" href="#">Technology Consulting</a>
                                            <!-- <ul class="sub-menu subsub">
                                                <li><a href="#">Digital Transformation</a></li>
                                                <li><a href="#">Legacy Software Modernization</a></li>
                                                <li><a href="#">MVP Development</a></li>
                                            </ul> -->
                                        </li>
                                        <li class="child" ><a class="header__menu_item" href="#">UI/UX Design</a></li>
                                        <li class="child" ><a class="header__menu_item" href="#">Support &amp; Maintenance</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="header__menu_item" href="#"><span>Industries</span></a>
                                    <ul class="parent">
                                        <li class="child"><a class="header__menu_item"  href="#">Healthcare &amp; Biotech</a>
                                            <!-- <ul class="sub-menu subsub">
                                                <li class=""><a href="#">Biotech</a></li>
                                                <li class=""><a href="#">Fitness &amp; Wellness</a></li>
                                                <li class=""><a href="#">Life Science</a></li>
                                                <li class=""><a href="#">mHealth</a></li>
                                                <li class=""><a href="#">Pharma</a></li>
                                            </ul> -->
                                        </li>
                                        <li class="child"><a class="header__menu_item" href="-">Logistics &amp; Transportation</a></li>
                                        <li class="child"><a class="header__menu_item" href="#">Manufacturing &amp; Supply Chain</a></li>
                                        <li class="child"><a class="header__menu_item" href="#">Media &amp; Entertainment</a></li>
                                        <li class="child"><a class="header__menu_item" href="#">Retail</a></li>
                                        <li class="child"><a class="header__menu_item" href="#">EdTech &amp; eLearning</a></li>
                                        <li class="child"><a class="header__menu_item" href="#">FinTech</a></li>
                                        <li class="child"><a class="header__menu_item" href="#">Ecommerce</a>
                                            <!-- <ul class="sub-menu subsub">
                                                <li class=""><a href="#">Adobe Commerce</a></li>
                                            </ul> -->
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown" ><a class="header__menu_item" href="#"><span>Company</span></a>
                                    <ul class="parent" >
                                        <li  class="child"><a class="header__menu_item" href="#">About</a>
                                            <!-- <ul class="sub-menu subsub">
                                                <li  class=""><a href="#">Sustainability Policy</a></li>
                                                <li  class=""><a href="#">Support Ukraine</a></li>
                                            </ul> -->
                                        </li>
                                            <li class="child" ><a class="header__menu_item" href="#">Careers</a>
                                            <!-- <ul class="sub-menu subsub">
                                                <li  class=""><a href="#">Relocation</a></li>
                                            </ul> -->
                                        </li>
                                            <li class="child" ><a class="header__menu_item" href="#">How we work</a></li>
                                        </ul>
                                    </li>
                                <li><a class="header__menu_item" href="#"><span>Our Thinking</span></a></li>
                                <li><a class="header__menu_item" href="#"><span>Case Studies</span></a></li>
                            </ul>
                            <div class="header__socials">
                                <a class="header__social_item" href="#" target="_blank">
                                    <span>LINKEDIN</span>
                                </a>
                                <a class="header__social_item" href="#" target="_blank">
                                    <span>INSTAGRAM</span>
                                </a>
                                <a class="header__social_item" href="#" target="_blank">
                                    <span>TIKTOK</span>
                                </a>
                                <a class="header__social_item" href="#" target="_blank">
                                    <span>YOUTUBE</span>
                                </a>
                            </div>
                            <div class="header__mini_links">
                                <a class="header__mini_link" href="#">
                                    <span>PRIVACY POLICY</span>
                                </a>
                                <a class="header__mini_link" href="#">
                                    <span>COOKIE POLICY</span>
                                </a>
                                <a class="header__mini_link" href="#">
                                    <span>TERMS AND CONDITIONS</span>
                                </a>
                            </div>
                            <div class="header__sing_in">
                                <a class="header__sing_in_item" href="contact.php">
                                    <span>CONTACT US</span>
                                </a>
                            </div>
                            <div class="header__close"><span></span><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
    ');
}
