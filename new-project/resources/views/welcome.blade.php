<html>
  <body>
    <form action="/check_number" method="post">
    @csrf <!-- {{ csrf_field() }} -->
      Number: <input type="text" name="number" /><br />

      <input type="submit" />
    </form>

    <form action="/check_csv" method="post" enctype="multipart/form-data">
    @csrf <!-- {{ csrf_field() }} -->

      CSV File: <input type="file" id="csv" name="csv" /><br />

      <input type="submit" />
    </form>
  </body>
</html>
