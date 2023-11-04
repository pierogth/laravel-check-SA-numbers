<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <body>
        <div class="container">
            <form action="/check_number" method="post">
                @csrf
                <!-- {{ csrf_field() }} -->

                <div class="mb-3">
                    <label for="number" class="form-label">Number:</label>
                    <input type="text" class="form-control" id="number" name="number" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <form action="/check_csv" method="post" enctype="multipart/form-data">
                @csrf
                <!-- {{ csrf_field() }} -->

                <div class="mb-3">
                    <label for="csv" class="form-label">CSV File:</label>
                    <input type="file" class="form-control" id="csv" name="csv" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>
