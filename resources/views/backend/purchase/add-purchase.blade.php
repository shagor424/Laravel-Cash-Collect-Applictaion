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
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
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

          <section class="col-md-12 offset-md-0">
           
           <div class="card">
              <div class="card-header" style="background-color: #086A87 ">
                <h5 style="color: white">Add Purchase
                  <a  href="{{route('purchases.view')}}" class="btn btn-warning btn-sm float-right"><i class="fa fa-list"> Purchase List</i></a>
                </h5>
              </div> 
            <div class="card-body" style="background-color:     #d9dad6   ">
                
            
   
  
   <div class="row"> 
  <div class="col-md-2">
    <div class="form-group"> 
        <label for="purchase_date" class="col-sm-12 control-label">Purchase Date <span class="text-danger">*</span></label>
      </div>
    </div>
        <div class="col-sm-4">
           <input type="date" name="purchase_date" class="form-control"  placeholder="YYYY-MM-DD" data-validation="requierd" id="purchase_date">
            @error('purchase_date')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>

        <div class="col-md-2">
   <div class="form-group">
        <label for="unit_id" class="col-sm-12 control-label">Unit Name <span class="text-danger">*</span></label>
      </div>
    </div>
        <div class="col-sm-4">
            <input type="text" name="unit_id" class="form-control text-center" value="{{old('unit_id')}}" id="unit_id" ata-validation="requierd" readonly  style="background-color: #D8FDBA" >
            @error('unit_id')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>

     <div class="col-md-2">
   <div class="form-group">
        <label for="category_id" class="col-sm-12 control-label"> Supplier Name <span class="text-danger">*</span></label>
      </div>
    </div>
        <div class="col-md-4">
          <select  name="supplier_id" class="form-control select2bs4" id="supplier_id">
          <option value="">Select Supplier</option>
                @foreach($suppliers as $supplier)
                <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                @endforeach 
            </select>
          @error('supplier_id')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>

     <div class="col-md-2">
    <div class="form-group"> 
        <label for="model" class="col-sm-12 control-label">Model </label>
      </div>
    </div>
        <div class="col-sm-4">
           <input type="text" name="model" class="form-control text-center" value="{{old('model')}}" id="model" ata-validation="requierd" readonly  style="background-color: #D8FDBA" >
            @error('model')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
       
   
  <div class="col-md-2">
   <div class="form-group">
        <label for="category_id" class="col-sm-12 control-label"> Category Name <span class="text-danger">*</span></label>
      </div>
    </div>
        <div class="col-sm-4">
          <select  name="category_id" class="form-control select2bs4" id="category_id">
          <option value="">Select Category</option>
            </select>
          @error('category_id')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
    
   
   <div class="col-md-2">
    <div class="form-group"> 
        <label for="size" class="col-sm-12 control-label">Size/Weight <span class="text-danger">*</span></label>
      </div>
    </div>
        <div class="col-sm-4">
         <input type="text" name="size" class="form-control text-center" value="{{old('size')}}" id="size" ata-validation="requierd" readonly  style="background-color: #D8FDBA" >
            @error('size')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
  

 <div class="col-md-2">
    <div class="form-group">
        <label for="sub_category_id" class="col-sm-12 control-label">Sub Cat Name <span class="text-danger">*</span></label>
      </div>
    </div>
        <div class="col-sm-4">
            <select name="sub_category_id" class="form-control select2bs4" id="sub_category_id">
                <option value="">Select Sub Category</option>
                @foreach($subcategories as $subcategory)
                <option value="{{$subcategory->id}}">{{$subcategory->item_name}}</option>
                @endforeach
            </select>
            @error('sub_category_id')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>

 
<div class="col-md-2">
      <div class="form-group"> 
        <label for="color" class="col-sm-12 control-label">Product Color</label>
      </div>
    </div>
        <div class="col-sm-4">
           <input type="text" name="color" class="form-control text-center" value="{{old('color')}}" id="color" ata-validation="requierd" readonly  style="background-color: #D8FDBA" >
            @error('color')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
   

<div class="col-md-2">
    <div class="form-group">
        <label for="sub_category_id" class="col-sm-12 control-label">Sub Sub Cat Name </label>
      </div>
    </div>
        <div class="col-sm-4">
            <select name="sub_sub_category_id" class="form-control select2bs4" id="sub_sub_category_id">
                <option value="">Select Sub Sub Category</option>
                @foreach($subsubcategories as $subsubcategory)
                <option value="{{$subsubcategory->id}}">{{$subsubcategory->item_name}}</option>
                @endforeach
            </select>
            @error('sub_sub_category_id')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
   

   <div class="col-md-2">
      <div class="form-group"> 
        <label for="warranty_time" class="col-sm-12 control-label">Warranty Time <span class="text-danger">*</span></label>
      </div>
    </div>
        <div class="col-sm-4">
           <input type="text" name="warranty_time" class="form-control text-center" value="{{old('warranty_time')}}" id="warranty_time" ata-validation="requierd" readonly  style="background-color: #D8FDBA" >
              @error('warranty_time')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
 

   <div class="col-md-2">
   <div class="form-group">
        <label for="brand_id" class="col-sm-12 control-label">Brand Name </label>
      </div>
    </div>
        <div class="col-sm-4">
            <select name="brand_id" class="form-control select2bs4" id="brand_id">
                <option value="">Select Brand</option>
                @foreach($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->item_name}}</option>
                @endforeach
            </select>
            @error('brand_id')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>
 
    <div class="col-md-2">
    <div class="form-group"> 
        <label for="purchase_code" class="col-sm-12 control-label">Purchase Memo <span class="text-danger">*</span></label>
      </div>
    </div>
        <div class="col-sm-4">
            <input type="text" name="purchase_code" class="form-control" value="{{old('purchase_code')}}" id="purchase_code" placeholder="Purchase Memo No" data-validation="requierd">
            @error('purchase_code')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>

      <div class="col-md-2">
    <div class="form-group"> 
        <label for="product_name" class="col-sm-12 control-label">Product Name <span class="text-danger">*</span></label>
      </div>
    </div>
        <div class="col-sm-4">
            <select  name="product_id" class="form-control select2bs4" id="product_id">
          <option value="">Select Product Name</option>
                @foreach($products as $product)
                <option value="{{$product->id}}">{{$product->product_name}}</option>
                @endforeach 
            </select>
            @error('product_id')
            <strong class="text-danger">{{$message}}</strong>
            @enderror
        </div>

       
        <div class="col-sm-2">
            <a style="font-size: 14px;font-weight: bold;margin: 0;width: 150px"class="btn btn-danger btn-block pull-right"><i  style="font-size: 30px;color: white" class="fa fa-plus-circle addeventmore"> <strong style="color: white;font-size: 16px;margin: 0">Add More</strong></i></a>
        </div></i>
      
         </div>
</div>

<!-- Strat Card Body 2 -->

<div class="card-body"> 
  <form method="POST" action="{{route('purchases.store')}}" class="form-horizontal"enctype="multipart/form-data" id="myform">
    @csrf
    <table class="table table-bordered table-sm" width="100%">
      <thead>
        <tr>
          <th width="15%">Category</th>
          <th width="15%">Product Name</th>
          <th width="11%">Product Code</th>
          <th width="9%">Quantity</th>
          <th width="13%">Unit Price</th>
          <th width="13%">Sell Price</th>
          <th width="15%">Description</th>
          <th width="10%">SubTotal</th>
          <th width="8%">Action</th>
        </tr>
      </thead>
      <tbody id="addrow" class="addrow">
        
      </tbody>
      <tbody>
        <tr>
          <td colspan="5"></td>
         
          <td></td>
          <td></td>
           <td>
            <input type="text" name="estimated_amount" value="0" id="estimated_amount" class="form-control form-control-sm text-right estimated_amount" readonly="" style="background-color: #D8FDBA">
          </td>
          <td></td>
        </tr>
      </tbody>
    </table>

<br>
    <div class="form-group">
        <div class="col-sm-12">
            <button style="font-size: 20px;font-weight: bold;" type="submit" class="btn btn-success btn-block pull-right" id="storebutton">Purchase Store</button>
        </div>
         </div>
      </form>
   </div>

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
<!-- store -->

<script type="text/x-handlebars-template" id="document-template">
<tr class="delete_add-more_item" id="delete_add-more_item">
    <input type="hidden" name="purchase_date[]" value="@{{purchase_date}}">
    <input type="hidden" name="purchase_code[]" value="@{{purchase_code}}">
    <input type="hidden" name="supplier_id[]" value="@{{supplier_id}}">
    <input type="hidden" name="sub_category_id[]" value="@{{sub_category_id}}">
    <input type="hidden" name="sub_sub_category_id[]" value="@{{sub_sub_category_id}}">
    <input type="hidden" name="brand_id[]" value="@{{brand_id}}">
    <input type="hidden" name="unit_id[]" value="@{{unit_id}}">
    <input type="hidden" name="size[]" value="@{{size}}">
    <input type="hidden" name="color[]" value="@{{color}}">
    <input type="hidden" name="model[]" value="@{{model}}">
    <input type="hidden" name="warranty_time[]" value="@{{warranty_time}}">

    <td>
         <input  type="hidden" name="category_id[]" value="@{{category_id}}">
         @{{item_name}}
      </td>
     <td>
         <input type="hidden" name="product_id[]" value="@{{product_id}}">
         @{{product_name}}

    </td>
    <td>
         <input type="text"  name="product_code[]" class="form-control form-control-sm text-center product_code">
    </td>
    <td>
         <input type="number" min="1" name="buy_quantity[]" value="1" class="form-control form-control-sm text-center buy_quantity">
    </td>
     <td>
         <input type="text"  name="unit_price[]"  class="form-control form-control-sm text-center unit_price">
    </td>
     <td>
         <input type="text"  name="sell_price[]"  class="form-control form-control-sm text-center sell_price">
    </td>
     <td>
         <input type="text" name="description[]" class="form-control form-control-sm text-left description">
    </td>
     <td>
         <input type="text" name="buy_price[]" value="0.00" class="form-control form-control-sm text-right buy_price">
    </td>
     <td>
         <i class="btn btn-danger btn-sm fa fa-window-close removeeventmore"></i>
    </td>
  </tr>
</script>
<!-- add purchase -->
<script type="text/javascript">
  $(document).ready(function () {
  $(document).on("click",".addeventmore", function (){
    var purchase_date = $('#purchase_date').val();
    var purchase_code = $('#purchase_code').val();
    var supplier_id = $('#supplier_id').val();
    var category_id = $('#category_id').val();
    var item_name = $('#category_id').find('option:selected').text();
    var product_id = $('#product_id').val();
    var product_name = $('#product_id').find('option:selected').text();
    var brand_id = $('#brand_id').val();
    var sub_category_id = $('#sub_category_id').val();
    var sub_sub_category_id = $('#sub_sub_category_id').val();
    var unit_id = $('#unit_id').val();
    var model = $('#model').val();
    var size = $('#size').val();
    var color = $('#color').val();
    var warranty_time = $('#warranty_time').val();



   
    if(purchase_date == ''){
      $.notify("Purchase Date Required",{globalPosition:'top right}',className:'error'}); 
      return false;
    }

    if(supplier_id == ''){
      $.notify("Supplier Name Required",{globalPosition:'top right}',className:'error'});
      return false;
    }
     
    
     if(category_id == ''){
      $.notify("Category Name Required",{globalPosition:'top right}',className:'error'});
      return false;
    }
     if(product_id == ''){
      $.notify("Product_Name Required",{globalPosition:'top right}',className:'error'});
      return false;
    }

     if(unit_id == ''){
      $.notify("Unit Required",{globalPosition:'top right}',className:'error'});
      return false;
    }

    if(purchase_code == ''){
      $.notify("Purchase Memo No Required",{globalPosition:'top right}',className:'error'});
      return false;
    }
     
      var source = $("#document-template").html();
      var template = Handlebars.compile(source);
      var data = {
        purchase_date:purchase_date,
        purchase_code:purchase_code,
        supplier_id:supplier_id,
        category_id:category_id,
        item_name:item_name,
        product_id:product_id,
        product_name:product_name,
        brand_id:brand_id,
        sub_category_id:sub_category_id,
        sub_sub_category_id:sub_sub_category_id,
        unit_id:unit_id,
        model:model,
        size:size,
        color:color,
        warranty_time:warranty_time
      };
      var html = template(data);
      $('#addrow').append(html);
      

  });
  $(document).on("click",".removeeventmore",function(event){
    $(this).closest(".delete_add-more_item").remove();
    totalAmountPrice();
  });
  $(document).on('keyup click','.unit_price,.buy_quantity',function(){
    var unit_price = $(this).closest("tr").find("input.unit_price").val();
    var qty = $(this).closest("tr").find("input.buy_quantity").val();
    var total = unit_price * qty;
    $(this).closest("tr").find("input.buy_price").val(total);
    totalAmountPrice();
  });
    function totalAmountPrice(){
      var sum =0;
      $(".buy_price").each(function(){
        var value = $(this).val();
        if(!isNaN(value) && value.length != 0){
          sum += parseFloat(value);
        }
      });
      $('#estimated_amount').val(sum);
    }
});
</script>
  <!-- dropdown category -->
<script type="text/javascript">
  $(function(){
    $(document).on('change','#supplier_id',function(){
      var supplier_id =$('#supplier_id').val();

      $.ajax({
        url:"{{route('get-category')}}",
        type:"GET",
        data:{supplier_id:supplier_id},
        success:function(data){
          var html = '<option value="">Select Category</option>';
          $.each(data,function(key, v){
            html += '<option value="'+v.category_id+'">'+v.category.item_name+'</option>';
          });
          $('#category_id').html(html);
        }

      });
    });
  });
</script>

 <!-- dropdown sub category -->
  
<script type="text/javascript">
  $(function(){
    $(document).on('change','#category_id',function(){
      var category_id =$('#category_id').val();

      $.ajax({
        url:"{{route('get-subcategory')}}",
        type:"GET",
        data:{category_id:category_id},
        success:function(data){
          var html = '<option value="">Select Sub Category</option>';
          $.each(data,function(key, v){
            html += '<option value="'+v.sub_category_id+'">'+v.subcategory.item_name+'</option>';
          });
          $('#sub_category_id').html(html);
        }

      });
    });
  });
</script>

 <!-- dropdown sub sub category -->
  
<script type="text/javascript">
  $(function(){
    $(document).on('change','#sub_category_id',function(){
      var sub_category_id =$('#sub_category_id').val();

      $.ajax({
        url:"{{route('get-subsubcategory')}}",
        type:"GET",
        data:{sub_category_id:sub_category_id},
        success:function(data){
          var html = '<option value="">Select Sub Sub Category</option>';
          $.each(data,function(key, v){
            html += '<option value="'+v.sub_sub_category_id+'">'+v.subsubcategory.item_name+'</option>';
          });
          $('#sub_sub_category_id').html(html);
        }

      });
    });
  });
</script>

<!-- dropdown brand -->
<script type="text/javascript">
  $(function(){
    $(document).on('change','#sub_sub_category_id',function(){
      var sub_sub_category_id =$('#sub_sub_category_id').val();

      $.ajax({
        url:"{{route('get-brand')}}",
        type:"GET",
        data:{sub_sub_category_id:sub_sub_category_id},
        success:function(data){
          var html = '<option value="">Select Brand</option>';
          $.each(data,function(key, v){
            html += '<option value="'+v.brand_id+'">'+v.brand.item_name+'</option>';
          });
          $('#brand_id').html(html);
        }

      });
    });
  });
</script>

<!-- dropdown productname -->
<script type="text/javascript">
  $(function(){
    $(document).on('change','#brand_id',function(){
      var brand_id =$('#brand_id').val();

      $.ajax({
        url:"{{route('get-productname')}}",
        type:"GET",
        data:{brand_id:brand_id},
        success:function(data){
          var html = '<option value="">Select Product Name</option>';
          $.each(data,function(key, v){
            html += '<option value="'+v.id+'">'+v.product_name+'</option>';
          });
          $('#product_id').html(html);
        }

      });
    });
  });
</script>

<!-- dropdown unit -->

<script type="text/javascript">
  $(function(){
    $(document).on('change','#product_id',function(){
      var product_id =$('#product_id').val();

      $.ajax({
        url:"{{route('get-unit')}}",
        type:"GET",
        data:{product_id:product_id},
        success:function(data){
          $('#unit_id').val(data);
        }

      });
    });
  });
</script>

<!-- dropdown model -->

<script type="text/javascript">
  $(function(){
    $(document).on('change','#product_id',function(){
      var product_id =$(this).val();

      $.ajax({
        url:"{{route('get-model')}}",
        type:"GET",
        data:{product_id:product_id},
        success:function(data){
         $('#model').val(data);
        }

      });
    });
  });
</script>
<!-- dropdown size -->
<script type="text/javascript">
  $(function(){
    $(document).on('change','#product_id',function(){
      var product_id =$(this).val();

      $.ajax({
        url:"{{route('get-size')}}",
        type:"GET",
        data:{product_id:product_id},
        success:function(data){
          $('#size').val(data);
        }

      });
    });
  });
</script>

<!-- dropdown color -->
<script type="text/javascript">
  $(function(){
    $(document).on('change','#product_id',function(){
      var product_id =$(this).val();

      $.ajax({
        url:"{{route('get-color')}}",
        type:"GET",
        data:{product_id:product_id},
        success:function(data){
         $('#color').val(data);
        }

      });
    });
  });
</script>

<!-- dropdown product code -->
<script type="text/javascript">
  $(function(){
    $(document).on('change','#product_id',function(){
      var product_id =$(this).val();

      $.ajax({
        url:"{{route('get-product-code')}}",
        type:"GET",
        data:{product_id:product_id},
        success:function(data){
         $('#product_code').val(data);
        
        }

      });
    });
  });
</script>


<!-- dropdown stock -->
<script type="text/javascript">
  $(function(){
    $(document).on('change','#product_id',function(){
      var product_id =$(this).val();

      $.ajax({
        url:"{{route('get-warranty-time')}}",
        type:"GET",
        data:{product_id:product_id},
        success:function(data){
        $('#warranty_time').val(data);
        }

      });
    });
  });
</script>

<!-- End dropdown  -->
<script>
$(function () {
  
  $('#myform').validate({
    rules: {

    
      buy_quantity: {
      required: true,
        
      },

      category_id: {
      required: true,
        
      },
     
      buy_price: {
      required: true,
        
      },

      sell_price: {
      required: true,
        
      },
      unit_price: {
        required: true,
        
      },
      purchase_date: {
        required: true,
        
      },
      product_code: {
        required: true,
        
      },
       
      product_id: {
      required: true,
        
      },
        supplier_id: {
        required: true,
        
      },
      warranty_time: {
        required: true,
        
      },
      unit_id: {
        required: true,
        
      },
       
      purchase_code: {
      required: true,
        
      },


      email: {
        required: true,
        email: true
       
      },
      password: {
        required: true, 
        minlength: 6
      },
      cpassword: {
      required: true,
      equalTo:'#password'
        
      }
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
        
      },

      name: {
        required: "Please enter Name",
        
      },
      
      password: {
        required: "Please enter password",
        minlength: "Your password must be at least 6 characters long"
      },

      cpassword: {
        
        equalTo:"Confirm password Does Not Match",
        }
   
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>

 <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format:'YYYY-mm-dd'
        });
    </script>
  @endsection