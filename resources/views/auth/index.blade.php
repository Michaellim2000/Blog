<!DOCTYPE html>
<html lang="en">

<head>

  <title>Form</title>
</head>

<body>
  <form method="post" action="/welcome">
    @csrf
    <h1>Buat Account Baru!</h1>

    <h3> Sign Up Form</h3>

    <label for="fname">First name:</label>
    <br><br>
    <input type="text" id="fname" name="fname">
    <br><br>
    <label for="lname">Last name:</label>
    <br><br>
    <input type="text" id="lname" name="lname">
    <br><br>

    <label>
      Gender :
    </label>
    <br><br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label>
    <br><br>

    <label for="Nationality">Nationality:</label>
    <br><br>
    <select name="Nationality" id="Nationality">
      <option value="Indonesian">Indonesian</option>
      <option value="Malaysian">Malaysian</option>
      <option value="Singapore">Singapore</option>
      <option value="Australian">Australian</option>
    </select>
    <br><br>

    <label>
      Language Spoken:
    </label>
    <br><br>
    <input type="checkbox" id="BahasaIndonesia" name="BahasaIndonesia" value="BahasaIndonesia">
    <label for="vehicle1">Bahasa Indonesia</label><br>
    <input type="checkbox" id="English" name="English" value="English">
    <label for="vehicle2">English</label><br>
    <input type="checkbox" id="Other" name="Other" value="Other">
    <label for="vehicle3">Other</label><br>
    <br>

    <label>
      Bio:
    </label>
    <br><br>
    <textarea name="textarea"></textarea>
    <br>
    <button type="submit">Sign Up</button>
  </form>
</body>
