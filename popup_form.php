<section id="popup" class="popup <?=($mail_send)?'popup2':''?>">
        <form id="form_wrapper" action="" method="post">
          <div class="left-pop">
            <div class="pop_title">Schedule A Visit</div>
            <img class="logo2" src="./images/logo 2.png" alt="pop up logo">
            <!-- form starts here -->

            <?php if(isset($sucess) && !empty($sucess)) { ?>
            <div class="alert alert-success" role="alert">
              <?php echo $sucess; ?>
            </div>
            <?php } ?>
            <?php if(isset($error) && !empty($error)) { ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $error; ?>
            </div>
            <?php } ?>
            <input class="text_inputs form_name" name="form_name" required type="text" Placeholder="Name">
            <input class="text_inputs form_phone" name="form_phone" required type="text" Placeholder="Phone">
            <input class="text_inputs form_email" name="form_email" required type="email" Placeholder="Email">
          </div>

          <div class="right-pop">
            <button type='button' class="cross" onclick="myFunction()"></button>
            <div class="right-content">
              <div class="checkboxes">
                <div class="pop-right-title">What are your current Real Estate Needs?</div>
                <input type="checkbox" id="right-away" name="right_away" value="looking to buy right away">
                <label for="right-away"> Looking To Buy Right Away</label><br>
                <input type="checkbox" id="just-looking" name="just_looking" value="just looking">
                <label for="just-looking"> Just Looking</label><br>
                <input type="checkbox" id="in-year" name="in_year" value="buying in a year">
                <label for="in-year"> Buying Within A Year</label><br><br>

                <p>Are You Pre-approved For Loan ?</p>
                <input type="radio" id="yes" name="rad" value="yes">
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="rad" value="no">
                <label for="no">NO</label><br><br>


                <div class="pop-right-bottom">What Type Of Unit You Are Interested In ?</div>
                <input type="checkbox" id="right-away" name="appartment" value="appartment">
                <label for="right-away"> Apartment</label>
                <input type="checkbox" id="just-looking" name="penthouse" value="penthouse">
                <label for="just-looking">Penthouse</label>
                <input type="checkbox" id="in-year" name="townhouse" value="townhouse">
                <label for="in-year"> Townhouse</label><br><br><br>
                <!-- <button type="submit" class="submit-button" name="form_action" >Schedule</button> -->
                <input type="submit" class="submit-button" name="form_action" value="Schedule">
              </div>


            </div>
          </div>
        </form>




      </section>