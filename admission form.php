<?php


?>
<!DOCTYPE html>
<html>
<head>
    <title>ADMISSION FORM</title>
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
        input[type="radio"], input[type="checkbox"] {
            width: auto;
            margin-right: 8px;
        }
        button {
            background-color: aqua;
            color: #fff;
            text-shadow: 0 0 10px #00fff7, 0 0 20px #00fff7, 0 0 40px #00fff7;
            border: none;
            padding: 12px 24px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.1em;
            display: block;
            margin: 24px auto 0 auto;
        }
        /* Increase the size of the textbox and its text */
        input[type="text"] {
        width: 300px;      /* Set desired width */
        height: 40px;      /* Set desired height */
        font-size: 18px;   /* Set font size for text inside */
        padding: 8px;      /* Optional: add padding for better appearance */
        }
        </style>
    </head>
    <body>
        <form>
            <section>
                <h1 class="login-title">Child Personal Details</h1>
                <p>Please fill out the form below with your medical information.</p>
                <p>Ensure all fields are completed accurately.</p>
                <label for="childName">Child's Name:</label>
                <input type="text" id="childName" name="childName" placeholder="Enter child's  full name" required>
                <label for="childAge">Child's Age:</label>
                <input type="date" id="childAge" name="childAge" placeholder="Enter child's date of birth" required>
                <label for="placeOfBirth">Place Of Birth</label>
                <input type="text" id="placeOfBirth" name="placeOfBirth" placeholder="Enter child's place of birth" required>
                <label for="gender">Gender:</label>
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female" required>
                <label for="female">Female</label><br><br>
                <label for="nationality">Nationality:</label>
                <input type="text" id="nationality" name="nationality" placeholder="Enter child's nationality" required>
                <label for="religion">Religion:</label>
                <input type="text" id="religion" name="religion" placeholder="Enter child's religion" required>
                <label for="tribe">Tribe</label>
                <input type="text" id="tribe" name="tribe" placeholder="Enter child's tribe" required>
            </section>
            <section>
                <h1 class="login-title">Admission Details</h1>
                <p>Please fill out the form below with child information.</p>
                <label for="admissionDate">Admission Date:</label>
                <input type="date" id="admissionDate" name="admissionDate" required>
                <label for="admittedby">Admitted By:</label>
                <input type="text" id="admittedby" name="admittedby" placeholder="Enter name of person admitting the child" required>
                <label for="admissionReason">Reason for Admission:</label>
                <textarea id="admissionReason" name="admissionReason" rows="4" placeholder="Abandoned, Orphaned, Rescued, Referred by Court, etc." required></textarea>
                <label for="childcurrentstatus">child current status:</label>
                <input type="text" id="childcurrentstatus" name="childcurrentstatus" placeholder="Healthy / Injured / Sick / Malnourished / Other" required>   
            </section>
            <section>
                <h1 class="login-title">Background Information</h1>
                <p>Please fill out the form below with child's background information.</p>
                <label>Previous Living Situation</label>
                <input type="radio" id="family" name="childBackground" value="family" required>
                <label for="family">Family</label>
                <input type="radio" id="street" name="childBackground" value="street" required>
                <label for="street">Street</label>
                <input type="radio" id="foster" name="childBackground" value="foster" required>
                <label for="foster">Foster Care</label><br><br>
                <label for="Languages">Languages Spoken:</label>
                <label for="KnownfamilyMembers">Known Family Members?</label>
                <input type="checkbox" id="KnownfamilyMembers" name="KnownfamilyMembers" value="yes" onchange="toggleFamilyFields()">

                <div id="familyFields" style="display:none; margin-top: 16px;">
                    <label for="familyMemberName">Name of Family Member:</label>
                    <input type="text" id="familyMemberName" name="familyMemberName" placeholder="Enter name">

                    <label for="relationWithChild">Relation with the Child:</label>
                    <input type="text" id="relationWithChild" name="relationWithChild" placeholder="Enter relation">

                    <label for="familyContact">Contact:</label>
                <input type="tel" id="familyContact" name="familyContact" placeholder="Enter contact number">
                </div>
                </section>
                <section>
                <h1 class="login-title"> Education Information</h1>
                <p>Ensure all fields are completed accurately.</p>
                <label for="hasthechildbeenschooledbefore">Has the child been schooled before?</label>
                <input type="radio" id="schooledYes" name="hasthechildbeenschooledbefore" value="yes" required>
                <label for="schooledYes">Yes</label>
                <input type="radio" id="schooledNo" name="hasthechildbeenschooledbefore" value="no" required>
                <label for="schooledNo">No</label>
                <div id="schoolFields" style="display:none; margin-top: 16px;">
                    <label for="lastschoolattended">Last school attended</label>
                    <input type="text" id="lastschoolattended" name="lastschoolattended" placeholder="Enter last school attended">
                    <label for="class_grade">Class/Grade:</label>
                    <input type="text" id="class_grade" name="class_grade" placeholder="Enter class or grade">
                    <label for="schoolperformance">School Performance:</label>
                    <input type="radio" id="good" name="schoolperformance" value="good">
                    <label for="good">Good</label>
                    <input type="radio" id="average" name="schoolperformance" value="average">
                    <label for="average">Average</label>
                    <input type="radio" id="poor" name="schoolperformance" value="poor">
                    <label for="poor">Poor</label>
                    <label for="learningdisabilities">Learning Disabilities:</label>
                    <input type="checkbox" id="learningdisabilities" name="learningdisabilities" value="yes">
                </div>
            </section>
            <!-- Moved closing form tag to after all form fields and submit button -->
            <section>
                <h1 class="login-title">Person admitting</h1>
                <p>Please fill out the form below with the person admitting the child.</p>
                <label for="admissionPersonName">Full Name:</label>
                <input type="text" id="admissionPersonName" name="admissionPersonName" placeholder="Enter full name of person admitting the child" required>
                <label for="role">Role:</label>
                <input type="text" id="role" name="role" placeholder="Enter role of person admitting the child" required>
                <label for="admissionPersonContact">Contact:</label>
                <input type="tel" id="admissionPersonContact" name="admissionPersonContact" placeholder="Enter contact number of person admitting the child" required>
                <label for="relationshipToChild">Relationship to Child:</label>
                <input type="text" id="relationshipToChild" name="relationshipToChild" placeholder="Enter relationship to the child" required>
                <label for="idnumber">ID Number:</label>
                <input type="text" id="idnumber" name="idnumber" placeholder="Enter ID number of person admitting the child" required>
            </section>
            <section>
                <h1 class="login-title">Final officials filling</h1>
                <p>Please fill out the form below with the final officials filling the form.</p>
                <label for="officialsName">Official's Name:</label>
                <input type="text" id="officialsName" name="officialsName" placeholder="Enter official's name" required>
                <label for="officialsRole">Official's Role:</label>
                <input type="text" id="officialsRole" name="officialsRole" placeholder="Enter official's role" required>
                <label for="dateFilled">Date Filled:</label>
                <input type="date" id="dateFilled" name="dateFilled" required>
                <label for="signature">Signature:</label>
                <input type="text" id="signature" name="signature" placeholder="Enter signature of official filling the form" required>
            </section>
            <button type="button" style="background-color: aqua; color: rgb(5, 5, 5);" onclick="validateForm()">submit</button>
            </form>
            <script>
                function toggleFamilyFields() {
                    var checkbox = document.getElementById('KnownfamilyMembers');
                    var fields = document.getElementById('familyFields');
                    fields.style.display = checkbox.checked ? 'block' : 'none';
                }
                // Toggle school fields based on radio selection
                document.addEventListener('DOMContentLoaded', function() {
                    var yesRadio = document.getElementById('schooledYes');
                    var noRadio = document.getElementById('schooledNo');
                    var schoolFields = document.getElementById('schoolFields');
                    if (yesRadio && noRadio && schoolFields) {
                        yesRadio.addEventListener('change', function() {
                            schoolFields.style.display = this.checked ? 'block' : 'none';
                        });
                        noRadio.addEventListener('change', function() {
                            schoolFields.style.display = 'none';
                        });
                    }
                });
            </script>
        </body>
    </html>            <script>
                function toggleFamilyFields() {
                    var checkbox = document.getElementById('KnownfamilyMembers');
                    var fields = document.getElementById('familyFields');
                    fields.style.display = checkbox.checked ? 'block' : 'none';
                }
                // Toggle school fields based on radio selection
                document.addEventListener('DOMContentLoaded', function() {
                    var yesRadio = document.getElementById('schooledYes');
                    var noRadio = document.getElementById('schooledNo');
                    var schoolFields = document.getElementById('schoolFields');
                    if (yesRadio && noRadio && schoolFields) {
                        yesRadio.addEventListener('change', function() {
                            schoolFields.style.display = this.checked ? 'block' : 'none';
                        });
                        noRadio.addEventListener('change', function() {
                            schoolFields.style.display = 'none';
                        });
                    }
                });

                function validateForm() {
                    const form = document.querySelector('form');
                    let valid = true;
                    // Check all required inputs and textareas
                    Array.from(form.querySelectorAll('input[required], textarea[required]')).forEach(function(input) {
                        if (input.type === 'radio' || input.type === 'checkbox') return;
                        if (!input.value.trim()) {
                            valid = false;
                        }
                    });
                    // Check required radio groups
                    const radioGroups = {};
                    form.querySelectorAll('input[type=radio][required]').forEach(function(radio) {
                        radioGroups[radio.name] = true;
                    });
                    Object.keys(radioGroups).forEach(function(name) {
                        const checked = Array.from(form.querySelectorAll('input[name="' + name + '"]')).some(r => r.checked);
                        if (!checked) valid = false;
                    });
                    if (valid) {
                        alert('Submission successful');
                    } else {
                        alert('Fill out the required info');
                    }
                }
            </script>
