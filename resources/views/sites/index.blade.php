<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Locations</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="text-center mb-5">
            <h1 class="display-4">Site Locations</h1>
            <a href="{{ route('sites.create') }}" class="btn btn-success btn-lg">Create New Location</a>
        </div>

        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Site ID</th>
                    <th class="text-center">Kabupaten</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sites as $site)
                <tr>
                    <td class="text-center">{{ $site->site_id }}</td>
                    <td>{{ $site->kabupaten }}</td>
                    <td>
                        <form method="post" action="{{ route('sites.update', $site->site_id) }}">
                            @csrf
                            @method('put')
                            <div class="input-group">
                                <select class="custom-select" name="status" onchange="this.form.submit()">
                                    <option value="On-Air" {{ $site->status == 'On-Air' ? 'selected' : '' }}>On-Air
                                    </option>
                                    <option value="Off-Air" {{ $site->status == 'Off-Air' ? 'selected' : '' }}>Off-Air
                                    </option>
                                </select>
                            </div>
                        </form>
                    </td>
                    <td class="text-center">
                        <form action="{{ route('sites.destroy', $site->site_id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this site?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>