<!DOCTYPE html>
<html>
<head>
    <title>MEDICAL FORM</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: #eafcff;
        }
        form {
            width: 100vw;
            max-width: 100vw;
            min-width: 100vw;
        }
        section {
            background-color: #fff;
            padding: 32px;
            border-radius: 16px;
            margin-bottom: 24px;
            box-shadow: 0 0 16px rgba(1, 247, 255, 0.5);
        }
        h1.login-title {
            color: #fff;
            text-shadow: 0 0 10px #00fff7, 0 0 20px #00fff7, 0 0 40px #00fff7;
            background: #00bcd4;
            border-radius: 8px;
            padding: 8px 0;
            margin-bottom: 16px;
        }
        label, input, textarea, button {
            font-size: 1.1em;
            font-family: Arial, sans-serif;
        }
        label {
            display: block;
            margin-bottom: 4px;
            color: #015e6b;
        }
        input[type="text"], input[type="date"], input[type="number"], input[type="tel"], textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #b2ebf2;
            border-radius: 6px;
            box-sizing: border-box;
            background: #f7feff;
        }
    prompt input[type="text"] {
        width: 300px; /* Set desired width */
        height: 40px; /* Set desired height */
        font-size: 18px; /* Set font size for text inside */
        padding: 8px; /* Optional: add padding for better appearance */
    }
    prompt .nav-links {
    margin-top: 16px;
    text-align: center;
    }

    prompt .nav-links a {
    color: #0078d4;
    text-decoration: none;
    margin: 0 8px;
    font-size: 16px;
    }

    prompt .nav-links a:hover {
    text-decoration: underline;
    }
</style>
    <!-- ...existing code... -->
    <prompt>
    <!-- Your form fields here -->
    <input type="text" placeholder="Username or Email" />
    <input type="password" placeholder="Password" />
    <button type="submit">Login</button>

    <!-- Navigation links below the form fields -->
    <div class="nav-links">
        <a href="/register">Register</a>
        <span> | </span>
        <a href="/login">Login</a>
    </div>
    </prompt>
<!-- ...existing code... -->
    <form>
        <section>
            <h1 class="login-title">Child Basic Information</h1>
            <p>Please fill out the form below with your medical information.</p>
            <p>Ensure all fields are completed accurately.</p>
            <p>Once completed, click the submit button to save your information.</p>
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" required><br><br>
            <label for="dob">Date Of Birth</label>
            <input type="date" id="dob" name="dob" required><br><br>
            <label for="gender">Gender</label>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" required>
            <label for="female">Female</label><br><br>
            <label for="admissiondate">Admission Date</label>
            <input type="date" id="admissiondate" name="admissiondate" required><br><br>
        </section>
        <section>
            <h1 class="login-title">GUARDIAN INFORMATION</h1>
            <p>Please fill out the form below with your guardian's information.</p>
            <p>Ensure all fields are completed accurately.</p>
            <label for="guardianname">Guardian Name</label>
            <input type="text" id="guardianname" name="guardianname" required><br><br>
            <label for="relationship">Relationship</label>
            <input type="text" id="relationship" name="relationship" required><br><br>
            <label for="guardianphone">Guardian Phone</label>
            <input type="tel" id="guardianphone" name="guardianphone" required><br><br>
            <label for="emergencycontactperson">Emergency Contact Person</label>
            <input type="text" id="emergencycontactperson" name="emergencycontactperson" required><br><br>
            <label for="emergencycontactphone">Emergency Contact Phone</label>
            <input type="tel" id="emergencycontactphone" name="emergencycontactphone" required><br><br>
        </section>
        <section>
            <h1 class="login-title">Medical Background</h1>
            <p>Please fill out the form below with your medical background.</p>
            <p>Ensure all fields are completed accurately.</p>
            <label for="medicalhistory">Known Medical History</label>
            <textarea id="medicalhistory" name="medicalhistory" rows="4" cols="50" required></textarea><br><br>
            <label for="allergies">Allergies</label>
            <textarea id="allergies" name="allergies" rows="4" cols="50"></textarea><br><br>
            <label for="currentmedications">Current Medications</label>
            <textarea id="currentmedications" name="currentmedications" rows="4" cols="50"></textarea><br><br>
            <label for="vaccinationstatus">Vaccination Status</label>
            <input type="text" id="vaccinationstatus" name="vaccinationstatus"><br><br>
            <label for="specialneeds">Disabilities/Special Needs</label>
            <textarea id="specialneeds" name="specialneeds" rows="4" cols="50"></textarea><br><br>
            <label for="additionalinfo">Additional Information</label>
            <textarea id="additionalinfo" name="additionalinfo" rows="4" cols="50"></textarea><br><br>
        </section>
        <section>
            <h1 class="login-title">Immunization</h1>
            <p>please tick all that apply and the date of last applied</p>
            <p>Ensure all fields are completed accurately.</p>
            <div>
                <input type="checkbox" id="bcg" name="immunization[]" value="BCG">
                <label for="bcg">BCG</label>
                <label for="bcg_date">Date of Last Immunized:</label>
                <input type="date" id="bcg_date" name="bcg_date"><br><br>

                <input type="checkbox" id="polio" name="immunization[]" value="POLIO">
                <label for="polio">POLIO</label>
                <label for="polio_date">Date of Last Immunized:</label>
                <input type="date" id="polio_date" name="polio_date"><br><br>

                <input type="checkbox" id="dpt" name="immunization[]" value="DPT">
                <label for="dpt">DPT</label>
                <label for="dpt_date">Date of Last Immunized:</label>
                <input type="date" id="dpt_date" name="dpt_date"><br><br>

                <input type="checkbox" id="hepatitisb" name="immunization[]" value="HEPATITIS B">
                <label for="hepatitisb">HEPATITIS B</label>
                <label for="hepatitisb_date">Date of Last Immunized:</label>
                <input type="date" id="hepatitisb_date" name="hepatitisb_date"><br><br>

                <input type="checkbox" id="measles" name="immunization[]" value="MEASLES">
                <label for="measles">MEASLES</label>
                <label for="measles_date">Date of Last Immunized:</label>
                <input type="date" id="measles_date" name="measles_date"><br><br>

                <input type="checkbox" id="others" name="immunization[]" value="OTHERS">
                <label for="others">OTHERS (Specify)</label>
                <textarea id="others_specify" name="others_specify" rows="2" cols="40" placeholder="Specify other immunizations"></textarea>
                <label for="others_date">Date of Last Immunized:</label>
                <input type="date" id="others_date" name="others_date"><br><br>
            </div>
        <section>
            <h1 class="login-title">Current Status</h1>
            <p>Please fill out the form below with your current status.</p>
            <p>Ensure all fields are completed accurately.</p>
            <label for="weight">weight</label>
            <input type="number" id="weight" name="weight" required><br><br>
            <label for="height">height</label>
            <input type="number" id="height" name="height" required><br><br>
            <label for="bloodpressure">Blood Pressure</label>
            <input type="text" id="bloodpressure" name="bloodpressure" required><br><br>
            <label for="temperature">Temperature</label>
            <input type="number" id="temperature" name="temperature" required><br><br>
            <label for="observations">Observations</label>
            <textarea id="observations" name="observations" rows="4" cols="50" required placeholder="Describe skin condition, appetite, sleep habits, etc."></textarea><br><br>

        </section>  
        <section>
            <h1 class="login-title">Final officials information</h1>
            <label for="nurse name">Nurse Name</label>
            <input type="text" id="nurse_name" name="nurse_name" required><br><br>
            <label for="nurse signature">Nurse Signature</label>
            <input type="text" id="nurse_signature" name="nurse_signature" required><br><br>
            <label for="date">Date</label>
            <input type="date" id="date" name="date" required><br><br>
        <button type="button" style="background-color: rgb(1, 183, 255); color: rgb(5, 5, 5);" onclick="
            const form = this.form;
            let valid = true;
            // Check all required inputs and textareas
            Array.from(form.querySelectorAll('input[required], textarea[required]')).forEach(function(input) {
                if (!input.value.trim()) {
                    valid = false;
                }
            });
            // Check required radio groups
            const genderRadios = form.querySelectorAll('input[name=gender][required]');
            if (genderRadios.length && !Array.from(genderRadios).some(r => r.checked)) {
                valid = false;
            }
            if (valid) {
                alert('Submission successful');
            } else {
                alert('Fill out the required info');
            }
        ">submit</button> 
        </section>  
    </form>
</body>
</html>