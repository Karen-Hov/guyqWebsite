
<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{route('contact.send')}}" method="post"  enctype="multipart/form-data">
    @csrf
    @method('POST')
    <label for="fname">Type</label><br>
    <input type="hidden" id="fname" name="type" value="contact"><br>

    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="name" value="Doe"><br><br>

    <label for="country">country:</label><br>
    <input type="text" id="country" name="country" value=""><br><br>

    <label for="company">company:</label><br>
    <input type="text" id="company" name="company" value=""><br><br>

    <label for="phone">phone:</label><br>
    <input type="text" id="phone" name="phone" value=""><br><br>

    <label for="message">message:</label><br>
    <input type="text" id="message" name="message" value="message"><br><br>

    <label for="email">email:</label><br>
    <input type="text" id="email" name="email" value="email@email.ru"><br><br>

    <input type="submit" value="Submit">

</form>


</body>
</html>
