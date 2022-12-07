@extends('layout')
@section('content')
<link rel="stylesheet"  type="text/css" href="css/product.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class="container" style="justify-content: center;  align-items: center;">
        <div class="col-lg-12 col-md-12 col-sm-12 " style="margin-bottom: 70px; margin-top: 30px; display:flex">
            <div class="col-7" >
                <div class="table-wrapper-scroll-y my-custom-scrollbar" heigh="200px">
                    <table id="table_earning" class="table table-striped table-bordered table-sm" style="border-collapse: collapse; border-spacing: 0; width: 100%; max-height: 23%;">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Mã danh mục</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Số lượng sản phẩm</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($countpro as $p)
                                <tr>
                                    <th scope="row">{{$p['id']}}</th>
                                    <td>{{$p['name']}}</td>
                                    <td>{{$p['product_count']}}</td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>    
            </div>
            <div class="col-sm-5" >
                <div>
                    <canvas id="myChart2"></canvas>
                
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload = function () {
            let data = [2,2,3,2,2,2,1,3];
            let labels = ['	Quản Lý Nhiệt Độ', 'Vi Điều Khiển - KIT Phát Triển', 'Tool, Thiết Bị, Phụ Kiện',
            'Connectors','	Cơ Điện Tử', 'Nguồn','Linh Kiện Thụ Động' ];
           
            statsExpenditures(labels, data);
            
        }
        $(document).ready(function () {
            $('#table_earning').DataTable({
            "scrollY": "50vh",
            "scrollCollapse": true,
            });
        });
        
        function statsExpenditures(labels, data) {
            const ctx = document.getElementById('myChart2').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                            label: 'Thống kê sản phẩm',
                            data: data,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
    </script>
@stop