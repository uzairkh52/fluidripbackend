@extends('layouts.auth')


@section('content')
    
   <div class="wrapper">
   <!-- ====================================
         ——— LEFT SIDEBAR WITH OUT FOOTER
      ===================================== -->
   <x-auth.sidebar />
   <!-- ====================================
   ——— PAGE WRAPPER
   ===================================== -->
   <div class="page-wrapper">

      <!-- Header -->
      <x-auth.header />

      <!-- ====================================
      ——— CONTENT WRAPPER
      ===================================== -->
      <div class="content-wrapper">
         <div class="content"><!-- For Components documentaion -->

<!-- Masked Input -->
            <div class="card card-default">
            <div class="card-header">
               <h2>Create Post</h2>

               <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-input-musk" role="button" aria-expanded="false" aria-controls="collapse-input-musk"> </a>


            </div>
            <div class="card-body">
               <form method="POST" action="{{route('posts.store')}}">
                  @csrf

                  {{-- all error --}}
                  {{-- @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                     @endif --}}
   
                  <div class="row">
                     <div class="col-xl-6">
                        <div class="mb-5">
                           <label class="text-dark font-weight-medium" for="">Title</label>
                           <div class="input-group mb-3">
                              
                              <input type="text" class="form-control" name="title">
                           </div>
                           @error('title')
                              <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                           
                        </div>
                        
                     </div>
                     
                     <div class="col-xl-6">
                        <div class="mb-5">
                           <label class="text-dark font-weight-medium">Ddesciption</label>
                           <div class="input-group mb-3">
                           
                              <input type="text" class="form-control" name="description" value="">
                           </div>
                           @error('description')
                              <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
   
                     <div class="col-xl-6">
                        <div class="mb-5">
                           <label class="text-dark font-weight-medium">Category</label>
                           <div class="input-group mb-3">
                              
                              <select class="form-control" name="category" id="">
                                 <option value="" disabled selected>please select</option>
                                 @if (count($collection) > 0)
                                 
                                    @foreach ($collection as $item)
                                       <option value="{{$item['id']}}">{{$item['name']}}</option>
                                    @endforeach
                                 @else
                                    <option value="">category not found</option>
                                 @endif
   
                              </select>
   
               
                  
                           </div>
                           @error('category')
                              <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xl-6">
                        <div class="mb-5">
                                    
                           <label class="text-dark font-weight-medium">Tags</label>
                           <div class="input-group mb-3">
                              
                              <select class="form-control selectpicker" multiple data-live-search="true" name="tags[]" id="">
                                 <option value="" disabled selected>please select</option>
                                 @if (count($tags) > 0)
                                    @foreach ($tags as $item)
                                       <option value="{{$item['id']}}">{{$item['name']}}</option> 
                                    @endforeach
                                       
                                 @else
                                       
                                 @endif
                              </select>
                           </div>
                           
                           @error('tags')
                              <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
               
                     
   
                     <div class="col-xl-6">
                        <div class="mb-5">
                           <label class="text-dark font-weight-medium">Status</label>
                           <div class="input-group mb-3">
                              
                              <select class="form-control" name="is_publish" id="">
                                 <option value="" disabled>please select</option>
                                 <option value="1">publilsh</option>
                                 <option value="0">draft</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-12">
                        <div class="mb-5">
                           <button class="btn btn-primary">
                              submit
                           </button>
                        </div>
                     </div>
   
               </div>
                  
               </form>
         </div>



      </div>
      </div>

</div>
   
   </div>

      <!-- Footer -->
      <x-auth.footer />
   </div>
</div>


@endsection