@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Anak</h1>
</div>



<div class="col-lg-8">

</div>
<form method="post" action="/dashboard/dataanak">
    @csrf
    <div class="mb-3">
        <label for="title"> class="form-label"></title>