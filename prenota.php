<?php
include 'header.php';
?>

<!--Seksioni i pare prenotacipage-->

<section class="sec1prenota">
<div class="prenota">
        <h2>Prenota ora!</h2>
    </div>
</section>

<!--Seksioni i dyte prenotacipage-->

<section class="form">

    <div class="container form-cont">
        <div class="row">

            <div class="col-md-8">
                <form>
                <div class="form-row">
                <div class="form-group col-md-6">
                <label class="label-text" for="inputEmail4">Email</label>
                <input type="email" class="form-control mycontrol" id="inputEmail4" placeholder="Email">
                </div>

                <div class="form-group col-md-6">
                <label class="label-text" for="inputPassword4">Phone</label>
                 <input type="password" class="form-control mycontrol" id="inputPassword4" placeholder="Phone">
                 </div>
                </div>

               <h6>Viaggi</h6>

               <div class="form-row">
                <div class="form-group col-md-6">
                <label class="label-text" for="inputEmail4">First Name</label>
                <input type="email" class="form-control mycontrol" id="inputEmail4" placeholder="First Name">
                </div>

                <div class="form-group col-md-6">
                <label class="label-text" for="inputPassword4">Last Name</label>
                 <input type="password" class="form-control mycontrol" id="inputPassword4" placeholder="Last Name">
                 </div>
                </div>

                <div class="form-row">
                <div class="form-group col-md-8">
                <label class="label-text" for="inputEmail4">Address</label>
                <input type="email" class="form-control mycontrol" id="inputEmail4" placeholder="Address">
                </div>

                <div class="form-group col-md-4">
                <label class="label-text" for="inputPassword4">Apt,suite,etc*</label>
                 <input type="password" class="form-control mycontrol" id="inputPassword4" placeholder="Apt,suite,etc*">
                 </div>
                </div>

                <div class="form-row">
                <div class="form-group col-md-6">
                <label class="label-text" for="inputCity">City</label>
                 <input type="text" class="form-control mycontrol" id="inputCity">
                </div>

                 <div class="form-group col-md-4">
                 <label class="label-text" for="inputState">Region</label>
                 <select id="inputState" class="form-control mycontrol">
                 <option selected>Lazio</option>
                 <option>Toscana</option>
                 <option>Calabria</option>
                 <option>Piemonte</option>
                 </select>
                 </div>
                 </div>

                 <div class="form-row">
                 <div class="form-group col-md-6">
                 <label class="label-text" for="inputPassword4">Postal Code</label>
                 <input type="password" class="form-control mycontrol" id="inputPassword4" placeholder="Postal Code">
                 </div>
                 </div>

                  
                 <h5>Payment method</h5>

                 <div class="form-check form-check-inline">
                 <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                 <label  class="form-check-label" for="inlineCheckbox1">Visa/Mastercard</label>
                 </div>
                 <div class="form-check form-check-inline">
                 <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                 <label class="form-check-label" for="inlineCheckbox2">PayPal</label>
                 </div>

                 <button class="payment-btn">Proceed To Payment</button>
                </form>

            </div>

            <div class="col-md-4">
                
            <div class="card1">
        <div class="card-inner">

            <div class="front-face">
            <img src="Images/rome-flip copy.png" alt="">
            </div>

            <div class="back-face">
              <h2>Roma</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, velit! Molestiae a autem accusantium officiis off</p>
              <button class="btn-book">Prenota</button>
            </div>

          </div>
       </div>
    </div>

   </div> 
</div>

</section>

<hr>

<?php
include 'footer.php';
?>