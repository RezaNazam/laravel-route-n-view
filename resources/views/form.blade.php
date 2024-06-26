<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIGN UP</title>
    <link href="signup.css" rel="stylesheet" />
  </head>

<style>
  body {
  font-family: Arial, sans-serif;
  background-color: #030303;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 175vh;
}

h1 {
  color: #e3e3e3;
}

h3 {
  color: #e3e3e3;
}

form {
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  width: 400px;
}

label {
  display: block;
  margin-top: 10px;
  color: #555;
}

input[type='text'],
select,
textarea {
  width: 90%;
  padding: 10px;
  margin-top: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

p {
  margin-top: 10px;
  color: #555;
}

.gender-container {
  display: flex;
  flex-direction: column;
}

.gender-container label {
  display: flex;
  align-items: center;
}

.language-container {
  display: flex;
  flex-direction: column;
}

.language-container label {
  display: flex;
  align-items: center;
}

input[type='submit'] {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-top: 10px;
}

input[type='submit']:hover {
  background-color: #555;
}
</style>

  <body>
    <h1>Buat Account baru</h1>
    <h3>Sign up Form</h3>
    <form action ="{{ url('welcome') }}" method="get">
      <label for="fname"><strong>First name:</strong></label>
      <br />
      <input type="text" id="fname" name="fname" required /><br /><br />
      <label for="lname"><strong>Last name:</strong></label>
      <br />
      <input type="text" id="lname" name="lname" required /><br /><br />

      <div class="gender-container">
        <p><strong>Gender:</strong></p>
        <label for="male">
          <input type="radio" id="male" name="Gender" value="Male" required />
          Male
        </label>
        <label for="female">
          <input type="radio" id="female" name="Gender" value="Female" required />
          Female
        </label>
        <label for="walmart-bag">
          <input type="radio" id="walmart-bag" name="Gender" value="Walmart Bag" required />
          Walmart Bag
        </label>
        <label for="croissant">
          <input type="radio" id="croissant" name="Gender" value="Croissant" required />
          Croissant </label
        ><br />
      </div>

      <p><strong>Nationality:</strong></p>
      <select id="Nationality" name="Nationality" required>
        <option value="Choose">Choose</option>
        <option value="Indo">Indonesia</option>
        <option value="mamarika">Mamarika</option>
        <option value="mamarika">Singapore</option>
        <option value="other">other</option>
      </select>

      <br /><br />

      <div class="language-container">
        <p><strong>Bahasa yang dikuasai:</strong></p>
        <label for="bahasa1">
          <input type="checkbox" id="bahasa1" name="bahasa[]" value="Indonesia" required />
          Indonesia </label
        ><br />
        <label for="bahasa2">
          <input type="checkbox" id="bahasa2" name="bahasa[]" value="Germany" />
          Germany </label
        ><br />
        <label for="bahasa3">
          <input type="checkbox" id="bahasa3" name="bahasa[]" value="Mandarin" />
          Mandarin </label
        ><br /><br />
      </div>

      <label for="bio"> <strong>Bio</strong></label>
      <br />
      <textarea name="message" rows="10" cols="30" id="bio"></textarea>
      <br /><br />

      <input type="submit" value="Sign Up" />
    </form>
  </body>
</html>