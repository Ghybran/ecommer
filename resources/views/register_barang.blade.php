<x-template-layout>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form Barang</h3>
                  <form method="POST" action="{{ route('uploads.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-8 mb-6">
                        <div class="form-outline">
                          <label class="form-label" for="firstName">Nama Barang</label>
                          <input type="text" name="nama_barang" id="firstName" class="form-control form-control-lg" />
                        </div>
                      </div>
                      <div class="col-md-8 mb-6">
                        <div class="form-outline">
                          <label class="form-label" for="lastName">Harga Barang</label>
                          <input type="number" name="harga_barang" id="lastName" class="form-control form-control-lg" />
                        </div>
                      </div>
                    </div>
                      <div class="col-md-8 mb-6">
                        <div class="form-outline">
                          <label class="form-label" for="lastName">Description</label>
                          <input type="text" name="description" id="lastName" class="form-control form-control-lg py-10" />
                        </div>
                      </div>
                    </div>
                    <div class="row"><center>

                        <div class="col-md-8 mb-4 d-flex align-items-center">
                            <div class="form-outline datepicker w-100">
                                <label for="birthdayDate" class="form-label">Upload Gambar</label>
                               <center><input type="file" name="filename" class="form-control form-control-lg" id="birthdayDate" />
                               </center>
                            </div>
                        </div>
                    </center>
                        <div class="mt-4 pt-2">
                            <input class="bg-slate-500 btn btn-primary btn-lg" type="submit" value="Submit" />
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</x-template-layout>
