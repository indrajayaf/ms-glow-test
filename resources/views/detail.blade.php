@extends('layouts.main')
@section('container')

    <div class="container pb-3">
        <!-- content -->
        <section class="py-3">
            <div class="container">
            <div class="row gx-5">
                <aside class="col-lg-6">
                <div class="border rounded-4 mb-3 d-flex justify-content-center">
                    <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="{{ $product->imgUrl }}">
                    <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit shadow" src="{{ $product->imgUrl }}" />
                    </a>
                </div>
                </aside>
                <main class="col-lg-6">
                <div class="ps-lg-3">
                    <h4 class="title text-dark">
                        {{ $product->name }}
                    </h4>
                    <div class="d-flex flex-row my-3">
                    <div class="text-warning mb-1 me-2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="ms-1">
                        4.5
                        </span>
                    </div>
                    <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>
                    <span class="text-success ms-2">In stock</span>
                    </div>
        
                    <div class="mb-3">
                    <span class="h5">{{ "Rp. " . number_format($product->price,2,',','.') }}</span>
                    <span class="text-muted">/per pcs</span>
                    </div>
        
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut aperiam nulla adipisci at libero quo? Libero nisi, ratione laudantium est natus, aspernatur voluptates corporis ab provident corrupti adipisci, rerum vel ipsam perspiciatis soluta doloribus magnam debitis! Dignissimos nostrum sapiente sit obcaecati!.
                    </p>
        
                    <div class="row">
                    <dt class="col-3">SKU:</dt>
                    <dd class="col-9">{{ $product->sku }}</dd>
        
                    <dt class="col-3">Category</dt>
                    <dd class="col-9">{{ $product->category }}</dd>
        
                    <dt class="col-3">Brand</dt>
                    <dd class="col-9">{{ $product->brand }}</dd>
        
                    </div>
        
                    <hr />
        
                    <div class="row mb-4">
                    <!-- col.// -->
                    <div class="col-md-4 col-6 mb-3">
                        <label class="mb-2 d-block">Quantity</label>
                        <div class="input-group mb-3" style="width: 170px;">
                        <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                            <i class="fas fa-minus"></i>
                        </button>
                        <input type="text" class="form-control text-center border border-secondary" placeholder="14" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                        <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                            <i class="fas fa-plus"></i>
                        </button>
                        </div>
                    </div>
                    </div>
                    <a href="#" class="btn btn-primary btn-category border border-secondary active shadow-1 mb-2"> Buy now </a>
                    <a href="#" class="btn btn-primary btn-category border border-secondary active shadow-1 mb-2"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
                    <a href="#" class="btn btn-primary btn-category border border-secondary mb-2"> <i class="me-1 fa fa-heart fa-lg"></i> Save </a>
                    <a href="/product" class="btn btn-primary btn-category border border-secondary mb-2">Back to Product</a>
                </div>
                </main>
            </div>
            </div>
        </section>
        <!-- content -->
                 
    </div>
@endsection