@extends('backend.layouts.master')
@section('content')
 

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item active">View Invoice Pending List</li>
            </ol>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
       <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12">
           
           <div class="card">
              <div class="card-header" style="background-color:   #f1c40f  ">
                <h5>  Invoice Pending List
                  <a   href="{{route('invoices.add')}}" class="btn btn-success btn-sm float-right mr-5"><i class="fa fa-plus-circle"> Add Invoice</i></a>
                  <a  href="{{route('invoices.view')}}" class="btn btn-primary btn-sm float-right"><i class="fa fa-list"> Invoice Approved List</i></a>
               
                </h5>
              </div> 
            <div class="card-body">
                 <table id="example1" class="table table-bordered table-hover table-sm">
                  <thead>
                   <tr style="background-color: #641e16;color: white">
                    <th>SL</th>
                    <th>Invoice ID</th>
                    <th>Invoice No</th>
                    <th>Invoice Date</th>
                    <th>Paid Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $key => $invoice)
                    <tr>
                <td style="text-align: center;">{{$key+1}}</td>
                <td style="text-align: center;">{{$invoice->id}}</td>
                <td style="text-align: center;">{{$invoice->invoice_no}}</td>
                <td style="text-align: center;">{{date('d-M-Y',strtotime($invoice->invoice_date))}}</td>
                
                <td style="text-align: right;">{{$invoice->total_amount}}</td>
               
                <td style="text-align: right;">
                     @if($invoice->status==1)
                    <span style="padding: 8px" class="badge badge-success">Approved</span>
                    @else
                    <span style="padding: 8px" class="badge badge-danger">Pending</span>
                    @endif
                  </td>
                      <td style="text-align: center;">
                         <a href="{{route('invoices.approve',$invoice->id)}}" id="approve" title="Purchase Approve" class="btn btn-success btn-xs mr-2" > <i class="fa fa-check-circle"></i></a>

                          <a href="{{route('invoices.allview',$invoice->id)}}" class="btn btn-primary btn-xs"  title="Show All Data"> <i class="fa fa-eye"></i></a>

                           <a href="{{route('invoices.delete',$invoice->id)}}" class="btn btn-danger btn-xs" id="delete" style="Delete Data"> <i class="fa fa-trash"></i></a>
                         
                      </td> 
                    </tr>
                    @endforeach 
                  </tbody>
                </table>
                </div>
              </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <!-- modal -->


            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  @endsection