<?php
require_once 'inc/header.php';
require_once 'inc/nav.php';
?>

<div class="contact_mainpg">
    <div class="map_cnt">
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3662.8979656378497!2d85.32198167437852!3d23.355710903816004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e1a6f211070b%3A0xea94ef6378f21086!2sRoshpa%20Tower!5e0!3m2!1sen!2sin!4v1723199570346!5m2!1sen!2sin" width="730" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="cnt">
            <div class="cntheading">Contact Details</div>
            <div class="addconticn">
                <div class="adder">
                    <div class="crc"><i class="bi bi-geo-alt-fill"></i></div>
                    <span class="addtxt">Roshpa Tower, MG Road, Ranchi, <br>Jharkhand,834001</span>
                </div>
                <div class="adder">
                    <div class="crc"><i class="bi bi-envelope-fill"></i></div>
                    <span class="addtxt2">name@gmail.com</span>
                </div>
                <div class="adder">
                    <div class="crc"><i class="bi bi-telephone-fill"></i></div>
                    <span class="addtxt2">9876543210</span>
                </div>
            </div>
        </div>
    </div>
    <div class="cntctbox">
        <div class="conatiner frmc">
        <span class="snd" >Send a</span> <span class="snd2"> Message</span> <hr>
            <div class="row ababab">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
            </div>
            <div class="row ababab">
                <div class="col">
                        <input type="text" class="form-control" placeholder="email address" aria-label="email address">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Mobile no" aria-label="Mobile no">
                    </div>
            </div>
                <div class="mb-3 ababab">
                <!-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> -->
                <textarea placeholder="Write a message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
             </div>
             <button type="button" class="btn btn-outline-success bn">Send Message</button>
        </div>             
    </div>
    
    
</div>

<?php
require_once 'inc/footer.php';
?>