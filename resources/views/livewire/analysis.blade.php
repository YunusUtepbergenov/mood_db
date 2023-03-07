<div>
    <div class="card" >
        <h5 class="card-header">Grafik</h5>
        <div class="card-body">
            <canvas id="myChart1" style="width="600" height="100"></canvas>
        </div>
    </div>
    <hr>
    <div class="card">
        <h5 class="card-header">Indikatorlar jadvali</h5>
        <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
            <tr class="text-nowrap">
                <th>#</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
                <th>Table heading</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
                <td>Table cell</td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>

@push('scripts')
<script>
    const ctx = document.getElementById('myChart1');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($dates); ?>,
            datasets: [{
                label: 'Аҳоли кайфияти',
                data: <?php echo json_encode($bs_score); ?>,
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: false
                }
            }
        }
    });
    Livewire.on('updateChart', data => {
        console.log(data);
        chart.data = data;
        chart.update();
    });

</script>    
@endpush
