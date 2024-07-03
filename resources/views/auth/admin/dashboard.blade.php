@extends('templates.navbar')

@section('content')

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div class="container-xxl" id="kt_content_container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h1>Sistem Simulasi Bencana</h1>
                    <div class="text-center mt-4">
                        <iframe id="mapIframe" width="100%" height="375" frameborder="0" style="border:0;" src="https://www.google.com/maps/embed?center=-6.17511,106.82496&zoom=12" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <form id="disasterForm">
                        <div class="row mt-1">
                            <div class="col-md-4">
                                <label for="disasterType" class="form-label">Tipe Bencana Alam</label>
                                <select id="disasterType" class="form-select">
                                    <option value="gempa">Gempa</option>
                                    <option value="tsunami">Tsunami</option>
                                    <option value="banjir">Banjir</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="region" class="form-label">Wilayah</label>
                                <select id="region" class="form-select" onchange="updateCities(this.value)">
                                    <option value="banten">Banten</option>
                                    <option value="jakarta">Jakarta</option>
                                    <option value="jawa_barat">Jawa Barat</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="city" class="form-label">Kota</label>
                                <select id="city" class="form-select">
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mt-4">
                            <button type="button" class="btn btn-secondary me-2">Cancel</button>
                            <button type="button" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateCities(region) {
            let citySelect = document.getElementById('city');
            citySelect.innerHTML = '';

            let cities = {
                'banten': ['Tangerang', 'Tangerang Selatan', 'Cilegon', 'Serang'],
                'jakarta': ['Jakarta Selatan', 'Jakarta Barat', 'Jakarta Utara', 'Jakarta Timur', 'Jakarta Pusat'],
                'jawa_barat': ['Bekasi', 'Bandung', 'Depok', 'Cirebon', 'Banjar', 'Cimahi', 'Sukabumi', 'Tasikmalaya']
            };

            cities[region].forEach(city => {
                let option = document.createElement('option');
                option.value = city.toLowerCase().replace(' ', '_');
                option.text = city;
                citySelect.appendChild(option);
            });
        }
    </script>

@endsection
