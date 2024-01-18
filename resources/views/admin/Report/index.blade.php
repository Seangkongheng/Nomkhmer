@extends('layouts.admin')

@section('content')
<style>
  .box-report{
    display: flex;
    gap: 1.2rem;
    padding: 100px;
  }
  .box-type-report{
    padding-top: 50px;
    text-align: center;
    width: 400px;
    height: 400px;
    box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;
  }
  .box-type-report img{
  
    width: 250px;
  }
</style>
    <div class="card">
      <p>Report</p>
        <div class="box-report">
           <div class="box-report-all">
            <a href="/viewReport">
              <div class="box-type-report">
                <img src="/image/report (1).png" alt="">
                <p class="mt-5"><i>Report order </i></p>
             </div>
            </a>
           </div>

           <div class="box-report-all">
            <a href="/admin/view_product_report">
              <div class="box-type-report">
                <img src="/image/clipboard.png" alt="">
                <p class="mt-5"><i>Report product</i></p>
             </div>
            </a>
           </div>

           <div class="box-report-all">
            <a href="admin/view_customer_report">
              <div class="box-type-report">
                <img src="/image/consumer.png" alt="">
                <p class="mt-5"><i>Report customer </i></p>
             </div>
            </a>
           </div>
           
        </div>
    </div>
  
@endsection