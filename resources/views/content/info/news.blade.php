@extends('layouts/contentNavbarLayout')

@section('title')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pengaduan /</span> Berita</h4>

<!-- Content types -->
<div class="row mb-5">
  <div class="col-md-6 col-lg-4">
    <h6 class="mt-2 text-muted">Anda ingin menuliskan berita baru?</h6>
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Tambah Info Berita</h5>
      </div>
      <div class="card-body">
        <form>
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-name">Nama</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-name2" class="input-group-text"></span>
              <input type="text" id="basic-icon-default-name" class="form-control" aria-describedby="basic-icon-default-name2" />
            </div>
          </div>
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-judulberita">Judul Berita</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-judulberita2" class="input-group-text"></span>
              <input type="text" class="form-control" id="basic-icon-default-judulberita" aria-describedby="basic-icon-default-fullname2" />
            </div>
          </div>
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-jenis">Jenis Berita</label>
            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
              <option selected>Pilih Jenis</option>
              <option value="1">Teknologi</option>
              <option value="2">Pendidikan</option>
              <option value="3">Kesehatan</option>
              <option value="4">Sosial</option>
              <option value="5">Lainnya</option>
            </select>
          </div>
          <div class="mb-1">
            <label for="html5-tgl-input" class="col-form-label">Tanggal Kejadian</label>
            <div class="col-md-12">
              <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
            </div>
          </div>
          <div class="mb-1">
            <label class="form-label" for="basic-icon-default-places">Tempat Kejadian</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text"></span>
              <input type="text" id="basic-icon-default-places" class="form-control" aria-describedby="basic-icon-default-kronologi2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-description">Kronologi Kejadian</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text"></span>
              <input type="text" id="basic-icon-default-description" class="form-control" aria-describedby="basic-icon-default-kronologi2" />
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/2.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          Some quick example text to build on the card title and make up the bulk of the card's content.
        </p>
        <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/elements/2.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          Some quick example text to build on the card title and make up the bulk of the card's content.
        </p>
        <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  {{-- <div class="col-md-6 col-lg-4">
    <h6 class="mt-2 text-muted"></h6>
    <div class="card mb-4">
      <img class="card-img-top" src="{{asset('assets/img/elements/5.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <p class="card-text">
          Some quick example text to build on the card title and make up the bulk of the card's content.
        </p>
        <p class="card-text">Cookie topping caramels jujubes gingerbread. Lollipop apple pie cupcake candy canes cookie
          ice cream. Wafer chocolate bar carrot cake jelly-o.</p>
      </div>
    </div>
  </div> --}}
</div>

<div class="row mb-5">
  <div class="col-md-2 col-8 mb-3 mb-md-0">
    <div class="list-group">
      <a class="list-group-item list-group-item-action active" id="list-tech-list" data-bs-toggle="list" href="#list-tech">Teknologi</a>
      <a class="list-group-item list-group-item-action" id="list-education-list" data-bs-toggle="list" href="#list-education">Pendidikan</a>
      <a class="list-group-item list-group-item-action" id="list-health-list" data-bs-toggle="list" href="#list-health">Kesehatan</a>
      <a class="list-group-item list-group-item-action" id="list-sosial-list" data-bs-toggle="list" href="#list-sosial">Sosial</a>
      <a class="list-group-item list-group-item-action" id="list-others-list" data-bs-toggle="list" href="#list-others">Lainnya</a>
    </div>
  </div>
  <div class="col-md-10 col-12">
    <div class="tab-content p-0">
      <div class="tab-pane fade show active" id="list-tech">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-3">
              <img class="card-img-top" src="{{asset('assets/img/elements/5.jpg')}}" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <p class="card-text">Cookie topping caramels jujubes gingerbread. Lollipop apple pie cupcake candy canes cookie
                  ice cream. Wafer chocolate bar carrot cake jelly-o.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural lead-in to additional content. This content is a
                  little bit longer.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
              </div>
              <img class="card-img-bottom" src="{{asset('assets/img/elements/1.jpg')}}" alt="Card image cap" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-3">
              <img class="card-img-top" src="{{asset('assets/img/elements/7.jpg')}}" alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title.
                </p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
              <div class="card-body">
                <a href="javascript:void(0)" class="card-link">Card link</a>
                <a href="javascript:void(0)" class="card-link">Another link</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="list-education">
        <div class="row">
          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="card">
              <img class="card-img-top" src="{{asset('assets/img/elements/5.jpg')}}" alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">Card title that wraps to a new line</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="col-sm-12 mb-2">
              <div class="card p-3">
                <figure class="p-3 mb-0">
                  <blockquote class="blockquote">
                    <p>A well-known quote, contained in a blockquote element.</p>
                  </blockquote>
                  <figcaption class="blockquote-footer mb-0 text-muted">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-sm-12 mb-2">
              <div class="card bg-primary text-white text-center p-3">
                <figure class="mb-0">
                  <blockquote class="blockquote">
                    <p>A well-known quote, contained in a blockquote element.</p>
                  </blockquote>
                  <figcaption class="blockquote-footer mb-0 text-white">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-sm-12 mb-2">
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This card has a regular title and short paragraph of text below it.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="card">
              <img class="card-img-top" src="{{asset('assets/img/elements/18.jpg')}}" alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="row mb-2">
          <div class="col-md">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img class="card-img card-img-left" src="{{asset('assets/img/elements/12.jpg')}}" alt="Card image" />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      This is a wider card with supporting text below as a natural lead-in to additional content. This content
                      is a
                      little bit longer.
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      This is a wider card with supporting text below as a natural lead-in to additional content. This content
                      is a
                      little bit longer.
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="col-md-4">
                  <img class="card-img card-img-right" src="{{asset('assets/img/elements/17.jpg')}}" alt="Card image" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-md">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img class="card-img card-img-left" src="{{asset('assets/img/elements/12.jpg')}}" alt="Card image" />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      This is a wider card with supporting text below as a natural lead-in to additional content. This content
                      is a
                      little bit longer.
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      This is a wider card with supporting text below as a natural lead-in to additional content. This content
                      is a
                      little bit longer.
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="col-md-4">
                  <img class="card-img card-img-right" src="{{asset('assets/img/elements/17.jpg')}}" alt="Card image" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-md">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img class="card-img card-img-left" src="{{asset('assets/img/elements/12.jpg')}}" alt="Card image" />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      This is a wider card with supporting text below as a natural lead-in to additional content. This content
                      is a
                      little bit longer.
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                      This is a wider card with supporting text below as a natural lead-in to additional content. This content
                      is a
                      little bit longer.
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="col-md-4">
                  <img class="card-img card-img-right" src="{{asset('assets/img/elements/17.jpg')}}" alt="Card image" />
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
      <div class="tab-pane fade" id="list-health">
        <div class="card-group mb-3">
          <div class="card">
            <img class="card-img-top" src="{{asset('assets/img/elements/4.jpg')}}" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This content is a
                little
                bit longer.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="{{asset('assets/img/elements/4.jpg')}}" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This content is a
                little
                bit longer.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="{{asset('assets/img/elements/5.jpg')}}" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="{{asset('assets/img/elements/1.jpg')}}" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This card has even
                longer
                content than the first to show that equal height action.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="card-group mb-3">
          <div class="card">
            <img class="card-img-top" src="{{asset('assets/img/elements/4.jpg')}}" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This content is a
                little
                bit longer.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="{{asset('assets/img/elements/4.jpg')}}" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This content is a
                little
                bit longer.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="{{asset('assets/img/elements/5.jpg')}}" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="{{asset('assets/img/elements/1.jpg')}}" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This card has even
                longer
                content than the first to show that equal height action.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="list-sosial">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
              </div>
              <img class="img-fluid" src="{{asset('assets/img/elements/13.jpg')}}" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                <a href="javascript:void(0);" class="card-link">Card link</a>
                <a href="javascript:void(0);" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
              </div>
              <img class="img-fluid" src="{{asset('assets/img/elements/13.jpg')}}" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                <a href="javascript:void(0);" class="card-link">Card link</a>
                <a href="javascript:void(0);" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
              </div>
              <img class="img-fluid" src="{{asset('assets/img/elements/13.jpg')}}" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                <a href="javascript:void(0);" class="card-link">Card link</a>
                <a href="javascript:void(0);" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
              </div>
              <img class="img-fluid" src="{{asset('assets/img/elements/13.jpg')}}" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                <a href="javascript:void(0);" class="card-link">Card link</a>
                <a href="javascript:void(0);" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
              </div>
              <img class="img-fluid" src="{{asset('assets/img/elements/13.jpg')}}" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                <a href="javascript:void(0);" class="card-link">Card link</a>
                <a href="javascript:void(0);" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
              </div>
              <img class="img-fluid" src="{{asset('assets/img/elements/13.jpg')}}" alt="Card image cap" />
              <div class="card-body">
                <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                <a href="javascript:void(0);" class="card-link">Card link</a>
                <a href="javascript:void(0);" class="card-link">Another link</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="list-others">
        <div class="row mb-3">
          <div class="col-md-6 col-lg-4">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card text-center mb-3">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card text-end mb-3">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6 col-lg-4">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card text-center mb-3">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card text-end mb-3">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
