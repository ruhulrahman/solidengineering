@extends('index')
@section('content')
@section('title', 'Our Features Photo Gallery')
<style>
* { box-sizing: border-box; }

body {
  font-family: sans-serif;
}

/* ---- button ---- */

.button {
  display: inline-block;
  padding: 0.5em 1.0em;
  margin-bottom: 10px;
  background: #EEE;
  border: none;
  border-radius: 7px;
  background-image: linear-gradient( to bottom, hsla(0, 0%, 0%, 0), hsla(0, 0%, 0%, 0.2) );
  color: #222;
  font-family: sans-serif;
  font-size: 16px;
  cursor: pointer;
}

.button:hover {
  background-color: #8CF;
  color: #222;
}

.button:active,
.button.is-checked {
  background-color: #28F;
}

.button.is-checked {
  color: white;
}

.button:active {
  box-shadow: inset 0 1px 10px hsla(0, 0%, 0%, 0.8);
}

/* ---- button-group ---- */

.button-group:after {
  content: '';
  display: block;
  clear: both;
}

.button-group .button {
  float: left;
  border-radius: 0;
  margin-left: 0;
  margin-right: 1px;
}

.button-group .button:first-child { border-radius: 0.5em 0 0 0.5em; }
.button-group .button:last-child { border-radius: 0 0.5em 0.5em 0; }

/* ---- grid ---- */

.grid {
  border: 1px solid #333;
  max-width: 100%;
}

/* clear fix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- .element-item ---- */

.element-item {
  position: relative;
  float: left;
  margin: 5px;
  padding: 10px;
  /*background: #888;*/
  color: #262524;
}
.element-item img{
    width: 100%;
}
.element-item p{
    position: absolute;
    bottom: 10px;
    width: 94%;
    text-transform: none;
    letter-spacing: 0;
    font-weight: normal;
    color: white;
    font-size: 16px;
    padding: 2px;
    margin: 0 auto;
    text-align: center;
    background: #00000080;
    transition: 500ms;
}
.gallery{
    width: 100%;
    margin: 0 auto;

text-align: center;
}
.sort-by-button-group{
    max-width: 920px;
    margin: 0 auto;
    text-align: center;
}
.button-group .button {
    float: none;
    margin-right: -4px;
}

</style>

    <!-- ##### Breadcumb Area Start ##### -->
    @include('include/breadcumb')
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Meet The Team Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url({{ asset('public') }}/img/bg-img/cta.jpg)">
        <div class="container-fluid strategy">
            <div class="row">
                <div class="col-12">
                    <div class="gallery">
                        <h2>Photo Gallery</h2>
                        <p class="text-center">Filter photo using following Menu</p>
                        <div class="gallery-menu">
<div class="button-group filters-button-group">
  <button class="button is-checked" data-filter="*">show all</button>
  <button class="button" data-filter=".interior">Interior</button>
  <button class="button" data-filter=".engineering">Engineering</button>
  <button class="button" data-filter=".construction">Construction</button>
</div>
</div>

<div class="grid">
  <div class="element-item engineering">
    <img src="{{ asset('public/img/gallery/engi/engi-1.jpg') }}" alt="Image">
    <p>Engineering model-1</p>
  </div>
  <div class="element-item interior" data-category="interior">
    <img src="{{ asset('public/img/gallery/interior/interior-1.jpg') }}" alt="Image">
    <p>Interior model-1</p>
  </div>
  <div class="element-item construction">
    <img src="{{ asset('public/img/gallery/const/construction-1.jpg') }}" alt="Image">
    <p>Construction model-1</p>
  </div>
  <div class="element-item engineering">
    <img src="{{ asset('public/img/gallery/engi/engi-2.jpg') }}" alt="Image">
    <p>Engineering model-2</p>
  </div>
  <div class="element-item interior" data-category="interior">
    <img src="{{ asset('public/img/gallery/interior/interior-2.jpg') }}" alt="Image">
    <p>Interior model-2</p>
  </div>
  <div class="element-item construction">
    <img src="{{ asset('public/img/gallery/const/construction-2.jpg') }}" alt="Image">
    <p>Construction model-2</p>
  </div>
  <div class="element-item engineering">
    <img src="{{ asset('public/img/gallery/engi/engi-3.jpg') }}" alt="Image">
    <p>Engineering model-3</p>
  </div>
  <div class="element-item interior" data-category="interior">
    <img src="{{ asset('public/img/gallery/interior/interior-3.jpg') }}" alt="Image">
    <p>Interior model-3</p>
  </div>
  <div class="element-item construction">
    <img src="{{ asset('public/img/gallery/const/construction-3.jpg') }}" alt="Image">
    <p>Construction model-3</p>
  </div>
  <div class="element-item engineering">
    <img src="{{ asset('public/img/gallery/engi/engi-4.jpg') }}" alt="Image">
    <p>Engineering model-4</p>
  </div>
  <div class="element-item interior" data-category="interior">
    <img src="{{ asset('public/img/gallery/interior/interior-4.jpg') }}" alt="Image">
    <p>Interior model-4</p>
  </div>
  <div class="element-item construction">
    <img src="{{ asset('public/img/gallery/const/construction-4.jpg') }}" alt="Image">
    <p>Construction model-4</p>
  </div>
  <div class="element-item engineering">
    <img src="{{ asset('public/img/gallery/engi/engi-5.jpg') }}" alt="Image">
    <p>Engineering model-5</p>
  </div>
  <div class="element-item interior" data-category="interior">
    <img src="{{ asset('public/img/gallery/interior/interior-5.jpg') }}" alt="Image">
    <p>Interior model-5</p>
  </div>
  <div class="element-item construction">
    <img src="{{ asset('public/img/gallery/const/construction-5.jpg') }}" alt="Image">
    <p>Construction model-5</p>
  </div>
  <div class="element-item engineering">
    <img src="{{ asset('public/img/gallery/engi/engi-6.jpg') }}" alt="Image">
    <p>Engineering model-6</p>
  </div>
  <div class="element-item interior" data-category="interior">
    <img src="{{ asset('public/img/gallery/interior/interior-6.jpg') }}" alt="Image">
    <p>Interior model-6</p>
  </div>
  <div class="element-item construction">
    <img src="{{ asset('public/img/gallery/const/construction-6.jpg') }}" alt="Image">
    <p>Construction model-6</p>
  </div>
  <div class="element-item engineering">
    <img src="{{ asset('public/img/gallery/engi/engi-7.jpg') }}" alt="Image">
    <p>Engineering model-7</p>
  </div>
  <div class="element-item interior" data-category="interior">
    <img src="{{ asset('public/img/gallery/interior/interior-7.jpg') }}" alt="Image">
    <p>Interior model-7</p>
  </div>
  <div class="element-item construction">
    <img src="{{ asset('public/img/gallery/const/construction-7.jpg') }}" alt="Image">
    <p>Construction model-7</p>
  </div>
</div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Meet The Team Area End ##### -->
@endsection