<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>form</title>
    </head>
    <body>
        <!-- Bagian awal, isinya text heading-->
        <div>
        <h1> Buat Account Baru! </h1>
        <h3> Sign Up Form </h3>
        </div>

        <!-- membuat form -->
        <form action="{{ url('/welcome1') }}" method="POST">
        {{csrf_field()}}
            <label for="First name"  >First name: </label>
                <br><br>
                <input type="text" name="firstname" placeholder="" id="firstname">
                <br><br>
            <label for="Last name" >Last name: </label>
                <br><br>
                <input type="text" name="lastname" placeholder="" id="lastname">
                <br><br>
            <label> Gender: </label><br><br>
                <input type="radio" name="gender" value="Male">Male<br>
                <input type="radio" name="gender" value="Female">Female<br>
                <input type="radio" name="gender" value="Other">Other<br><br>
            <label> Nationality: </label><br><br>
                <select>
                    <option value="Indonesian">Indonesian</option>
                    <option value="Singaporan">Singaporan</option>
                    <option value="Malaysian">Malaysian</option>
                    <option value="Australian">Australian</option>
                </select>
                <br><br>
            <label> Language Spoken: </label><br><br>
                <input type="checkbox" name="Language Spoken" value="Bahasa Indonesia">Bahasa Indonesia<br>
                <input type="checkbox" name="Language Spoken" value="English">English<br>
                <input type="checkbox" name="Language Spoken" value="Other">Other<br>
            <br>
            <label for="Bio"> Bio: </label><br><br>
            <textarea cols="30" rows="7" id="pesan"></textarea><br>
            <input type="submit" value="Sign Up">
</form>
</body>
</html>
