<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=date],[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

textarea {
  width: 100%;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<div>
  <form action="make_pdf.php" method="POST">
  <h2>PERSONAL DETAILS</h2>
    <label for="title">Title</label>
    <input type="text" id="title" name="title" placeholder="Title">

    <label for="family name">Family Name</label>
    <input type="text" id="fname" name="familyname" placeholder="Family Name">

    <label for="gnames">Given Names</label>
    <input type="text" id="gname" name="givennames" placeholder="Given Names">

    <label for="title">Father's Full Name</label>
    <input type="text" id="title" name="fathername" placeholder="Father's Full Name">

    <label for="title">Date of Birth</label>
    <input type="date" name="dob">

    <label for="country">Country of Birth</label>
    <select id="country" name="countryofbirth">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="country">Marital Status</label>
    <select id="country" name="maritalstatus">
      <option value="Single">Single</option>
      <option value="Engaged">Engaged</option>
      <option value="Married">Married</option>
      <option value="Separated">Separated</option>
      <option value="Divorced">Divorced</option>
      <option value="Widow">Widow</option>
    </select>

    <label for="country">Gender</label>
    <select id="country" name="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>

    <label for="country">Child(Under 18 Years)</label>
    <select id="country" name="child">
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>

    <label for="country">Country of Residence</label>
    <select id="country" name="countryofresidence">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="country">Nationality</label>
    <select id="country" name="nationality">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="country">Other Nationalities</label>
    <select id="country" name="othernationalities">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <h2>VISA DETAILS</h2>
    <label for="title">Visa Type</label>
    <input type="text" id="title" name="visatype" placeholder="Visa Type">

    <label for="country">Purpose of Journey</label>
    <select id="country" name="purposeofjourney">
      <option value="Business">Business</option>
      <option value="Exhibition">Exhibition</option>
      <option value="Conference">Conference</option>
      <option value="Education">Education</option>
      <option value="Employment">Employment</option>
      <option value="Visiting Family">Visiting Family</option>
      <option value="Holiday">Holiday</option>
      <option value="Other">Other</option>
    </select>

    <label for="title">Entry Date</label>
    <input type="date" id="title" name="entrydate">

    <label for="title">Intended Duration of Stay(days):</label>
    <input type="number" id="title" name="durationofstay">

    <label for="title">Point of Entry</label>
    <input type="text" id="title" name="pointofentry" placeholder="Point of Entry">

    <label for="title">Number of Children Accompanied</label>
    <input type="number" id="title" name="numberofchildren">

    <label for="title">Places in Afghanistan Intended to Visit</label>
    <input type="text" id="title" name="placesinafghanistan" placeholder="Places">

    <label for="title">Complete Address in Afghanistan</label>
    <textarea id="" name="completeaddress" rows="4" cols="50"></textarea>

    <label for="country">Have you ever visited Afghanistan before?</label>
    <select id="country" name="visitedafghanistan">
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>

    <label for="country">Have you applied for an Afghanistan Visa Before?</label>
    <select id="country" name="appliedvisa">
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>

    <label for="country">Do you have a criminal record?</label>
    <select id="country" name="criminalrecord">
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>

    <h2>CONTACT DETAILS</h2>
    <label for="title">Current Address</label>
    <textarea id="" name="currentaddress" rows="4" cols="50"></textarea>
  
    <label for="title">Email Address</label>
    <input type="email" id="title" name="emailaddress" placeholder="Email Address">

    <label for="title">Mobile</label>
    <input type="number" id="title" name="mobile">

    <h2>PASSPORT DETAILS</h2>
    <label for="title">Passport Type</label>
    <input type="text" id="title" name="passporttype" placeholder="Passport Type">

    <label for="title">Passport Number</label>
    <input type="number" id="title" name="passportnumber">

    <label for="title">Place of Issue</label>
    <input type="text" id="title" name="placeofissue" placeholder="Place of Issue">

    <label for="title">Issue Date</label>
    <input type="date" id="title" name="issuedate">

    <label for="title">Expiry Date</label>
    <input type="date" id="title" name="expirydate">

    <h2>EMPLOYMENT DETAILS</h2>
    <label for="title">Current Occupation</label>
    <input type="text" id="title" name="currentoccupation" placeholder="Current Occupation">

    <label for="title">Employer's Name</label>
    <input type="text" id="title" name="employername" placeholder="Employer's Name">

    <label for="title">Empoyer's Address</label>
    <textarea id="" name="employeraddress" rows="4" cols="50"></textarea>
    
    <label for="title">Previous Employer's Name</label>
    <input type="text" id="title" name="previousemployername" placeholder="Previous Employer's Name">

    <label for="title">Previous Empoyer's Address</label>
    <textarea id="" name="previousemployeraddress" rows="4" cols="50"></textarea>
  

    <input type="submit" value="Submit" name="submit">
  </form>
</div>

</body>
</html>
