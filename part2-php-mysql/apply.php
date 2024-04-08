<!DOCTYPE html>
<html lang="en">

  <?php $title = "Job Application";
  include('head.inc'); ?>


  <body class="animation">

    <h1>
        Application form
    </h1>
    <hr>

    <?php include('header.inc'); ?>

    

    <div class="application-form">
      <h2>
        Job Application Form
      </h2>
      <form action="processEOI.php" method="post">
        <div>

          <label for="job_reference_number">
            Job reference number:
          </label>
          <input type="text" id="job_reference_number" name="job_reference_number" pattern="[A-Za-z0-9]{5}" title="Please enter exactly 5 alphanumeric characters" required >
        
        </div>

        <div>

          <label for="firstName">
            First name:
          </label>
          <input type="text" id="firstName" name="first_name"  pattern="[A-Za-z]{1,20}"title="Please enter less than 20 alphabetic characters" required >
          <label for="lastName">Last name:</label>
          <input type="text" id="lastName" name="last_name"  pattern="[A-Za-z]{1,20}"title="Please enter less than 20 alphabetic characters" required >
        
        </div>

        <br>

        <label for="date_of_birth" Date> Date Of Birth</label>
          <input type="text" name="date_of_birth" id="date_of_birth" pattern="\d{2}/\d{2}/\d{4}"
            placeholder="dd/mm/yyyy" />

        <br>

        <fieldset id="gender-fieldset">
            <legend>Gender</legend>
            <input id="male" type="radio" name="gender" value="Male" required="required" />
            <label for="male">Male</label>
            <input id="female" type="radio" name="gender" value="Female" />
            <label for="female">Female</label>
            <input id="other" type="radio" name="gender" value="Other" />
            <label for="other">Other</label>
        </fieldset>
        
      
        <br>
        <div>
          <label for="address">
            Street Address:
          </label>
          <input type="text" id="address" name="street_address"  maxlength="40">
        </div>
        <br>
        <div>  
          <label for="suburb_town">
            Suburb/town:
          </label>
          <input type="text" id="suburb_town" name="suburb_town" maxlength="40">
        </div>
        <br>
        <div class="state">
          <label for="state">
            State:
          </label>
          <select id="state" name="state">
            <option value="VIC">VIC</option>
            <option value="NSW">NSW</option>
            <option value="QLD">QLD</option>
            <option value="NT">NT</option>
            <option value="WA">WA</option>
            <option value="SA">SA</option>
            <option value="TAS">TAS</option>
            <option value="ACT">ACT</option>
          </select>
        </div>
        <br>
        <div>
          <label for="postcode">
            Postcode:
          </label>
          <input type="text" id="postcode" name="postcode" pattern="\d{4}" title="Please enter exactly 4 digits" required>
        </div>
        <br>
        <div>
          <label for="email">
            Email Address:
          </label>
          <input type="email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@gmail.com"  title="Please enter a valid email address" required>
          <label for="phone">
            Phone number:
          </label>
          <input type="tel" id="phone" name="phone_number" pattern="[0-9\s]{8,12}" title="Please enter 8 to 12 digits or spaces" required>
        </div>
        <br>
        <fieldset class="form-section" id="skills">
          <legend>Skills</legend>
         

          <label><input type="checkbox" name="skill[]" value="HTML" checked="checked" />HTML</label>

          <label><input type="checkbox" name="skill[]" value="CSS" />CSS</label>

          <label><input type="checkbox" name="skill[]" value="Javascript" />Javascript</label>

          <label><input type="checkbox" name="skill[]" value="PHP" />PHP</label>

          <label><input type="checkbox" name="skill[]" value="MySQL" />MySQL</label>
            <input type="checkbox" id="otherSkillsCheckbox"> Other Skills
            

          
          
          <textarea id="other_skill" name="other_skill" rows="5" cols="40" placeholder="Input other skills..."></textarea>

          <style>
            #other_skill {
            display: none;
            }
            #otherSkillsCheckbox:checked ~ #other_skill {
            display: block;
            }
          </style>

        </fieldset>

        <div class="buttons">
          <button type="submit">
            Apply
          </button>
          <button type="reset">
            Reset
          </button>
        </div>
      </form>
    </div>
      
    <?php include('footer.inc'); ?>
      
  </body>
</html>
