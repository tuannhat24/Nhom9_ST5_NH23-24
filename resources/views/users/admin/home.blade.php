 @extends('users.admin.layout.admin')
 @section('css')
     <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 @endsection
 @section('js')
     <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
     <script>
         new Morris.Line({
             // ID of the element in which to draw the chart.
             element: 'myfirstchart',
             // Chart data records -- each entry in this array corresponds to a point on
             // the chart.
             data: [{
                     year: '2008',
                     value: 20
                 },
                 {
                     year: '2009',
                     value: 10
                 },
                 {
                     year: '2010',
                     value: 5
                 },
                 {
                     year: '2011',
                     value: 5
                 },
                 {
                     year: '2012',
                     value: 20
                 }
             ],
             // The name of the data record attribute that contains x-values.
             xkey: 'year',
             // A list of names of data record attributes that contain y-values.
             ykeys: ['value'],
             // Labels for the ykeys -- will be displayed when you hover over the
             // chart.
             labels: ['Value']
         });
     </script>

     <script>
         $(document).ready(function() {
             $.ajax({
                 url: "{{ route('admin.statistics') }}",
                 method: 'GET',
                 success: function(data) {
                     console.log(data.totalProducts);
                     $('#totalProducts').text(data.totalProducts);
                     $('#totalCategories').text(data.totalCategories);
                     $('#totalQuantitySold').text(data.totalQuantitySold);
                     $('#mostFavoritedProduct').text(data.mostFavoritedProduct ? data
                         .mostFavoritedProduct.name : 'N/A');
                     $('#categoryWithMostProducts').text(data.categoryWithMostProducts ? data
                         .categoryWithMostProducts.name : 'N/A');
                 },
                 error: function() {
                     alert('Failed to fetch statistics.');
                 }
             });
         });
     </script>
 @endsection
 <!--Container-->

 @section('content')
     <div class="pd-20 card-box mb-30">
         <div class="clearfix mb-20">
             <div class="pull-left">
                 <h4 class="text-blue h4"></h4>
             </div>
         </div>

         <div class="row">
             <div class="col-md-12">
                 <div>
                     <p>Total Products: <span id="totalProducts"></span></p>
                     <p>Total Categories: <span id="totalCategories"></span></p>
                     <p>Total Quantity Sold: <span id="totalQuantitySold"></span></p>
                     <p>Most Favorited Product: <span id="mostFavoritedProduct"></span></p>
                     <p>Category with Most Products: <span id="categoryWithMostProducts"></span></p>
                 </div>
             </div>
             <div class="col-md-12">
                 <div id="myfirstchart" style="height: 250px;"></div>
             </div>
         </div>
     </div>
 @endsection
