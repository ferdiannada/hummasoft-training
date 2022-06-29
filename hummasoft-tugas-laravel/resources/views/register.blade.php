<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ACS | Sign-Up</title>
  </head>
  <body>
    <h1><===== Buat Account Baru! ====></h1>
    <h3>Sign Up Form</h3>
    <form action="{{ route('dashboard') }}">
      <label for="nama1">First Name :</label>
      <br />
      <input type="text" id="nama1" />
      <br /><br />
      <label for="nama2" id="nama2">Last Name :</label><br />
      <input type="text" /><br /><br /><br />
      <label for="gender">Gender:</label>
      <br /><br />
      <input type="radio" />Male
      <br />
      <input type="radio" />Female
      <br />
      <input type="radio" />Other <br /><br />

      <label for="negara">Nationality</label>
      <br /><br />
      <select name="country" id="negara">
        <option value="Indonesia">Indonesia</option>
        <option value="USA">USA</option>
        <option value="Vrindavan">Vrindavan</option>
        <option value="Russia">Russia</option>
      </select>
      <br /><br />

      <label for="bahasa">Language Spoken :</label>
      <br /><br />
      <input type="checkbox" name="bhs" />Bahasa Indonesia
      <br />
      <input type="checkbox" name="bhs" />English
      <br />
      <input type="checkbox" name="bhs" />Bahasa Jawa <br /><br />

      <label for="bio">Bio :</label>
      <br /><br />
      <textarea name="biodata" id="bio" cols="30" rows="6"></textarea>
      <br /><br />
      <button type="submit">Sign Up</button>
    </form>
  </body>
</html>
