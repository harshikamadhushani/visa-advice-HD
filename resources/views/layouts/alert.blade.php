@if(session()->has('SuccessMessage'))
<div class="alert alert-success alert-dismissible fade show text-white" role="alert">
    <i class="mdi mdi-check-all me-2"></i>
    {{ session()->get('SuccessMessage') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('ErrorMessage'))
<div class="alert alert-danger alert-dismissible fade show text-white" role="alert">
    <i class="mdi mdi-block-helper me-2"></i>
    {!! html_entity_decode(session()->get('ErrorMessage')) !!}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if($errors->any())
<div class="alert alert-danger alert-dismissible fade show text-white" role="alert">
    <b>Your Form has Error(s) -</b>
    @foreach($errors->all() as $error)
    <br>{{$error}}
    @endforeach
</div>
@endif
