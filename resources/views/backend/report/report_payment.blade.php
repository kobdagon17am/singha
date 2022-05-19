@extends('backend/inc_main') {{-- main.blade.php --}}

 @section('title','| All Tags')

@section('stylesheet')
     
@endsection 

@section('content')
 	
    {{-- content --}}
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">				
                    <div class="page-body">
                        <div class="card tabs-card">					
                            {{-- header --}}
                            <div class="card-header">
                            <h4>รายงานชำระเงิน</h4>
                            <p class="text-muted m-b-10">รายละเอียดข้อมูลรายงานชำระเงิน</p>
                                <ul class="breadcrumb-title b-t-default p-t-10"></ul>					
                            </div>
                            
                            <!-- block -->
                            <div class="card-block">
                                <form class="form-horizontal" action="{{ route('pdf.report.payment') }}" method="POST" target="_blank">
                                    {!! csrf_field() !!}
                                    <div class="card-block" id="reload">                              
                                        <div class="row">
                                            <div class="col-md-12">                                    
                                                <div class="text-center">
                                                    <div class="form-group">
                                                        <div class="form-group row"> 
                                                            <label class="col-sm-2 col-form-label text-right">วันเริ่ม:</label>
                                                            <div class="col-sm-3">
                                                                <input type="date" class="form-control" name="date_start" id="date_start" required  >
                                                            </div> 

                                                            <label class="col-sm-1 col-form-label text-right">วันสิ้นสุด:</label>
                                                            <div class="col-sm-3">
                                                                <input type="date" class="form-control" name="date_end" id="date_end" required  >
                                                            </div> 

                                                            <button type="submit" id="" class="btn btn-primary"><i class="fa fa-search"></i> ค้นหา</button>
                                                        </div>
                                                    </div>							
                                                </div>                                   
                                            </div>										
                                        </div>                      
                                    </div>   
                                </form> 
                            </div>                          
                        </div>
                        @include('backend/inc_footer')
                    </div>                 
                </div> 
            </div>
        </div>
    </div>


@endsection 

@section('script')

<script>
    $(document).ready(function(){
        var route_URL = "{{ route('backend.report.payment') }}"; // URL 
        $(".pcoded-submenu>li a[href='"+route_URL+"']").parent().addClass("active");
        $(".pcoded-submenu>li a[href='"+route_URL+"']").parent().parent().parent().addClass("pcoded-trigger");
    });
</script>


<script>

   
</script>



@endsection                   