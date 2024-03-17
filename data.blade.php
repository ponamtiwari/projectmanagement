<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="form-group">
            <label for="filter">Select Filter:</label>
            <select id="filter" class="form-control">
                <option value="total">Total</option>
                <option value="today">Today</option>
                <option value="this_year">This Year</option>
                <option value="this_week">This Week</option>
                <option value="this_quarter">This Quarter</option>
            </select>
        </div>

        <div id="total" class="data-grid">
            <h2>Total Data Count</h2>
            <p>{{ $data['total'] }}</p>
        </div>
        <div id="today" class="data-grid" style="display:none;">
            <h2>Today's Data Count</h2>
            <p>{{ $data['today'] }}</p>
        </div>
        <div id="this_year" class="data-grid" style="display:none;">
            <h2>This Year's Data Count</h2>
            <p>{{ $data['this_year'] }}</p>
        </div>
        <div id="this_week" class="data-grid" style="display:none;">
            <h2>This Week's Data Count</h2>
            <p>{{ $data['this_week'] }}</p>
        </div>
        <div id="this_quarter" class="data-grid" style="display:none;">
            <h2>This Quarter's Data Count</h2>
            <p>{{ $data['this_quarter'] }}</p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Function to handle filter change
        $(document).ready(function() {
            $('#filter').on('change', function() {
                $('.data-grid').hide();
                $('#' + $(this).val()).show();
            });
        });
    </script>
</body>
</html>
