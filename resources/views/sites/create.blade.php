<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Site</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="mb-0">Create New Location</h1>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('sites.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="site_id">Site ID:</label>
                                <input type="text" class="form-control" name="site_id" required>
                            </div>

                            <div class="form-group">
                                <label for="kabupaten">Kabupaten:</label>
                                <input type="text" class="form-control" name="kabupaten" required>
                            </div>

                            <div class="form-group">
                                <label for="status">Status:</label>
                                <select class="form-control" name="status" required>
                                    <option value="On-Air">On-Air</option>
                                    <option value="Off-Air">Off-Air</option>
                                </select>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">Create</button>
                                <a href="{{ route('sites.index') }}" class="btn btn-secondary ml-2">Back to List</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>