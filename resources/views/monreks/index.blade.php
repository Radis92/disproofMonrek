@extends('layouts.master_monrek')
@section('isi')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Data Sanggahan
            </div>
            <div class="panel-body">
                 <!-- /.row -->
                <div class="row">
                     <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                 <!DOCTYPE html>
                                 <html>
                                 <head>
                                     <title><?php  ?></title>
                                 </head><body>

                                 </body>
                                 </html>
                                  <h3 class="box-title">Disproof Table</h3>

                                <div class="box-tools">
                                    <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                            <!-- <input type="text" name="table_search" class="form-control pull-right" plac-eholder="Search"> -->

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
                <tr>
                    <th>NO</th>
                    <th>TID</th>
                    <th>KC Spv Data</th>
                    <th>Lokasi</th>
                    <th>Problem</th>
                    <th>Waktu Insert</th>
                    <th>Last tunai</th>
                    <th>Kategori</th>
                    <th>Sanggahan Cro</th>
                    </tr>
                <tr>
                    <td>1</td>
                    <td>440598</td>
                    <td>0045 - Madiun</td>
                    {{-- <td><span class="label label-success">Approved</span></td> --}}
                    <td>UNIT BRI DOLOPO</td>
                    <td>CO</td>
                    <td>2019-07-29 00:02:46</td>
                    <td>2019-07-28 21:57</td>
                    <td>OPS. ATM - PORTAL APLIKASI</td>
                    <td>DONE</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>440598</td>
                    <td>0045 - Madiun</td>
                    {{-- <td><span class="label label-success">Approved</span></td> --}}
                    <td>UNIT BRI DOLOPO</td>
                    <td>CO</td>
                    <td>2019-07-29 00:02:46</td>
                    <td>2019-07-28 21:57</td>
                    <td>OPS. ATM - PORTAL APLIKASI</td>
                    <td>Reply Ticket : ECH20190730.2223344 ( Problem GAMAS PSW )</td>
                </tr>

                </tr>
                <tr>
                <td>3</td>
                <td>440598</td>
                <td>0045 - Madiun</td>
                {{-- <td><span class="label label-success">Approved</span></td> --}}
                <td>UNIT BRI DOLOPO</td>
                <td>CO</td>
                <td>2019-07-29 00:02:46
                </td>
                <td>2019-07-28 21:57
                </td>
                <td>OPS. ATM - PORTAL APLIKASI</td>
                <td>DONE</td>
                </tr>
                    </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
