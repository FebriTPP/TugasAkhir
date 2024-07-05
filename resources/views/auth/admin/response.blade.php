@extends('templates.navbar')

@section('content')
<div class="container mt-5">
    <h3>Respon Bencana Alam</h3>
        <form>
            <div class="form-row align-items-center">
                <div class="col-auto">
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
                    </form>
                    <div class="col-auto mt-4">
                        <button type="submit" class="btn btn-primary mb-2">Cari</button>
                    </div>
                </div>
        </form>
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Tanggal Aktifitas</th>
                    <th>Wilayah</th>
                    <th>Coordinate</th>
                    <th>Total Responden</th>
                    <th>Map</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2024-07-02 13:53</td>
                    <td>Ciputat</td>
                    <td>Latitude: -6.30305326<br>Longitude: 106.7209621</td>
                    <td>150</td>
                    <td><a href="#">Lihat Lokasi</a></td>
                </tr>
                <tr>
                    <td>2024-07-03 13:53</td>
                    <td>Ciputat Timur</td>
                    <td>Latitude: -6.28593952<br>Longitude: 106.7499229</td>
                    <td>352</td>
                    <td><a href="#">Lihat Lokasi</a></td>
                </tr>
                <tr>
                    <td>2024-07-04 13:53</td>
                    <td>Serpong</td>
                    <td>Latitude: -6.30016417<br>Longitude: 106.670008</td>
                    <td>213</td>
                    <td><a href="#">Lihat Lokasi</a></td>
                </tr>
                <tr>
                    <td>2024-07-05 13:53</td>
                    <td>Serpong Utara</td>
                    <td>Latitude: -6.24352068<br>Longitude: 106.6544714</td>
                    <td>9233</td>
                    <td><a href="#">Lihat Lokasi</a></td>
                </tr>
                <tr>
                    <td>2024-07-06 13:53</td>
                    <td>Pamulang</td>
                    <td>Latitude: -6.329520346<br>Longitude: 106.7231262</td>
                    <td>536</td>
                    <td><a href="#">Lihat Lokasi</a></td>
                </tr>
                <tr>
                    <td>2024-07-07 13:53</td>
                    <td>Pondok Aren</td>
                    <td>Latitude: -6.259212515<br>Longitude: 106.690516</td>
                    <td>734</td>
                    <td><a href="#">Lihat Lokasi</a></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3"><strong>Total Responden</strong></td>
                    <td colspan="2"><strong>11218</strong></td>
                </tr>
            </tfoot>
        </table>
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
