<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=§, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <h1>All Users /
            <a name="" id="" class="btn btn-info" href="{{ route('user.add') }}" role="button">Add
                User</a>
        </h1>
        <div class="table-responsive">
            <table style="width:auto;"
                class="table mx-auto
        mt-5
        table-striped
        table-hover
        table-dark
        align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Item</td>
                        <td>Item</td>
                        <td>Item</td>
                        <td>Item</td>
                        <td>
                            <a name="" id="" class="btn btn-warning" href="#"
                                role="button">Update</a>
                            <a name="" id="" class="btn btn-danger" href="#"
                                role="button">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Item</td>
                        <td>Item</td>
                        <td>Item</td>
                        <td>Bangladesh dhaka pabna sadar pabna dublia</td>
                        <td>
                            <a name="" id="" class="btn btn-warning" href="#"
                                role="button">Update</a>
                            <a name="" id="" class="btn btn-danger" href="#"
                                role="button">Delete</a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>

</html>
