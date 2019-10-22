<!DOCTYPE html>
<html>
    <head><title>No 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.bundle.js"></script>
        <script src="jquery-3.4.1.js"></script>
        <script>
                $(document).ready(function(){
                    var nomor=0,jenis_barang, nama_barang, harga_satuan, jumlah_beli, total, sum = 0, sub_total = 0, diskon = 0, grand_total = 0, bayar = 0;
                    $(".add-row").click(function(){
                        nomor = nomor + 1;
                        jenis_barang = $("#jenis_barang").val();
                        nama_barang = $("#nama_barang").val();
                        harga_satuan = $("#harga_satuan").val();
                        jumlah_beli = $("#jumlah_beli").val();
                        total = harga_satuan * jumlah_beli;
                        sum += total;
                        $("#sub_total").text(": " + sum);
                        if(sum >= 645000){
                            diskon = 1 - 0.35;
                            $("#diskon").text(": 35%");
                        } else if(sum >= 430000){
                            diskon = 1 - 0.25;
                            $("#diskon").text(": 25%")
                        } else if(sum >= 257000){
                            diskon = 1 - 0.15;
                            $("#diskon").text(": 15%")
                        } else {
                            diskon = 1
                            $("#diskon").text(": -");
                        }
                        if(diskon != 0){
                            grand_total = sum * diskon;
                            $("#grand_total").text(": " + grand_total);
                        }
                        var markup = "<tr><td><input type='checkbox' name = 'record'></td><td>"+nomor+"</td>" + "</td><td>" + jenis_barang + "</td><td>" + nama_barang + "</td><td>" + harga_satuan + "</td><td>" + jumlah_beli + "</td><td>" + total + "</td><tr>"
                            $(".data tbody").append(markup);
                        });
                        $("#submit").click(function(){
                            bayar = $("#bayar").val();
                            if(bayar>=grand_total){
                                alert("Uang kembalian: " + (bayar-grand_total));
                                alert("Terima Kasih sudah berbelanja di SUGENG SHOP");
                            } else {
                                alert("Maaf uang Anda tidak mencukupi!");
                            }
                        });
                    $(".delete-row").click(function(){
                        $("table tbody").find('input[name="record"]').each(function(){
                            if($(this).is(":checked")){
                                $(this).parents("tr").remove();
                            }
                    });
                });
            });
        </script>
    </head>
    <body>
        <header>
            <nav id="webMaps" class="navbar-dark bg-dark" style="padding-left:16px;">
                <a href="toko.php"  class="navbar-brand">
                     TOKO NE SUGENG
                </a>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="color: black;">
                <div class="collapse navbar-collapse">
                </div>
            </nav>
        </header>
        <main>
            <div class="container" style="padding: 20px; margin: 10 px auto; margin-left: auto; margin-right: auto;">
                <div class="row">
                    <div class="col-6 mt-5">
                    <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Select : </h5>
                                    <form>
                                <input type="text" id="jenis_barang" placeholder="Jenis Baju"> <br>
                                <input type="text" id="nama_barang" placeholder="Nama Baju"> <br>
                                <input type="number" id="harga_satuan" placeholder="Harga Satuan"> <br>
                                <input type="number" id="jumlah_beli" placeholder="Jumlah Beli"> <br>
                                <input type="button" class="add-row" value="Tambahkan Barang">
                                <button type="button" class="delete-row" value="Delete Row">Delete</button>
                            </form>
                                </div>
                            </div>
                               
                            
                </div>
                <div class="col-6 mt-5">
                <table class="data" border="1" style="font-family: Georgia, 'Times New Roman', Times, serif; padding: 100px;" >
                                <thead>
                                    <tr>
                                        <th>Select</th>
                                        <th>No</th>
                                        <th>Jenis Baju</th>
                                        <th>Nama Baju</th>
                                        <th>Harga Satuan</th>
                                        <th>Jumlah Beli</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table><hr></center>
                            
                            <table>
                                <tr>
                                    <td>Sub Total</td>
                                    <td id="sub_total">: </td>
                                </tr>
                                <tr>
                                    <td>Diskon</td>
                                    <td id="diskon">: </td>
                                </tr>
                                <tr>
                                    <td>Grand Total</td>
                                    <td id="grand_total">: </td>
                                </tr>
                                <tr>
                                    <td>Bayar</td>
                                    <td>: <input type="number" id="bayar"></td>
                                </tr>
                            </table>
                            <br><br>
                            <input type="submit" class="btn btn-primary" value="Submit" id="submit">
                            <button class="btn btn-danger" onclick="window.location.href='no2.html'">Batal</button>
                </div>
            </div>
        </main>
    </body>
</html>