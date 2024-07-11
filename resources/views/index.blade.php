<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Content</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            function updateCities(provinceId) {
                $.ajax({
                    url: "/get-cities/" + provinceId, // Replace with your actual route
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $("#city").empty(); // Clear existing options
                        $("#city").append(
                            '<option value="">Pilih Kota</option>'); // Add "Pilih Kota" option
                        $.each(data, function(index, value) {
                            $("#city").append('<option value="' + value.id + '">' + value
                                .nama_kota + '</option>');
                        });
                    }
                });
            }

            // Attach the function to the province select element's change event
            $("#province").change(function() {
                updateCities(this.value);
            });
        });
    </script>
</body>

</html>
