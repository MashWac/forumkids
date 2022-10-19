<footer>
    <div id="footer">
        <div id="footercontent">
        <div class="footerinfo">
            <h5>CONTACTS</h5>
            <div id="telephone">
                <h6 class="condets">Email</h6>
                <p>info@joysunbear.com
                </p>
            </div>
            <div id="socials">
                <h6 class="condets">OUR SOCIALS</h6>
                <ion-icon class="socialicons" name="logo-facebook"></ion-icon>
                <ion-icon class="socialicons" name="logo-instagram"></ion-icon>
                <ion-icon class="socialicons" name="logo-whatsapp"></ion-icon>
            </div>
        </div>
        <div id="middlefooter" class="footerinfo">
            <h5>INFORMATION</h5>
            <div>
                <ul id="infolinks">
                    <li class="footerlinks">
                        <a class="pagelinks" href="{{ url('/aboutus') }}">About Us</a>
                    </li>
                    <li class="footerlinks">
                        <a class="pagelinks" href="{{ url('/return') }}">Travel The World</a>
                    </li>
                    <li class="footerlinks">
                        <a class="pagelinks" href="{{ url('/shipping') }}">School Visits</a>
                    </li>
                    <li class="footerlinks">
                        <a class="pagelinks" href="{{ url('/terms') }}">Terms And Conditions</a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="footerinfo">
            <h5>Subscribe</h5>
            <p>Sign up to get the latest on news, new releases and more...</p>
            <form>
                <input type="text" placeholder="Enter email address">
                <button class="btn btn-primary" type="submit">Sign Up</button> 
            </form>
        </div>
           
    </div>   
    <div id="footer-bottom">
        &copy; joysunbear.com | Designed by HCI group 8
    </div>
    </div>
    </footer>
<!---ionicons--->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <?php if(session('status')):?>
    <script>
    swal("<?php echo(session('status'))?>");
    </script>
    <?php endif;?>
</body>
</html>