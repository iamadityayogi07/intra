<?php include('header.php') ?>
<style>
.card-file-thumb img {
    width: 100%;
    height: 100%;
}
.file.btn.btn-lg.btn-primary {
  position: relative;
  overflow: hidden;
}
.file.btn.btn-lg.btn-primary input {
  position: absolute;
  font-size: 50px;
  opacity: 0;
  right: 0;
  top: 0;
}
.dropdown-file {
    position: absolute;
    right: 0;
    z-index: 9;
    background: #f6f6f6;
    padding: 0px 2px;
    box-shadow: -1px 2px 2px #5555;
}

.col-auto.w-140px.w-lg-220px {
    width: 172px;
    padding: 10px 5px;
}

.aiz-file-box {
    position: relative;
}
a.dropdown-link {
    padding: 0 3px;
}
.aiz-file-box .card-body p {
    margin-bottom: 0;
}

.aiz-file-box .card-body {
    padding: 6px;
}
.card-file-thumb img {
    width: 100%;
    height: 150px;
    object-fit: cover;
}

@media(max-width:767px) {
    .w-140px {
        width: 165px !important;
        padding: 7px;
    }
    main.main-content-wrapper {
        padding-left: 0 !important;
        padding-right: 0 !important;
    }

    .col-auto.w-140px.w-lg-220px {
        padding: 5px !important;
    }

    .card-file-thumb img {
        width: 100%;
        height: 130px;
        object-fit: cover;
    }

}
</style>

<div class="container">
    <div class="row mb-8">
        <div class="col-md-12">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                <div>
                    <h2>Media</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.php" class="text-inherit">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Upload Media</li>
                        </ol>
                    </nav>
                </div>
                <div>
                <div class="file btn btn-lg btn-primary py-2"> 
                <span class="h6 text-white">New Image Upload</span>
                    <input type="file" name="file"/>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-12 mb-5">
            <div class="card h-100 card-lg">
                <div class="p-6">
                    <div class="row justify-content-between">
                        <div class="col-md-4 col-12">
                            <form class="d-flex" role="search">
                                <input class="form-control" type="search" placeholder="Search images .. "  aria-label="Search" />
                            </form>
                        </div>
                        <div class="col-md-4 col-12">
                            <form class="d-flex align-item-center" role="search">
                                <select name="" class="ml-2 form-control" id="">
                                    <option value="">Sort By Newest</option>
                                    <option value="">Sort By Oldest</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body p-5">
                    <div class="row gutters-5">
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default"
                                    title="IMG-20231125-WA0009.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/ufmekWa6NgxMdrnDYGOYp04PyaO6XZVK7fMJ2eWX.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">IMG-20231125-WA0009</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>76.21 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default"
                                    title="IMG-20231125-WA0008.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/cL93Z6L4MluATKpnQnrye8a8r66phNHB4g39TrzS.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">IMG-20231125-WA0008</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>81.83 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default"
                                    title="IMG-20231124-WA0006.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/dwVxrR8siUTJ9xk9fPeMJVX8fGKaSbJV4enI29yW.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">IMG-20231124-WA0006</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>136.54 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default"
                                    title="IMG-20231124-WA0005.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/VxYqKE4moDa2e5npibFGVnSnMsvrCvW3Rh59Pe3T.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">IMG-20231124-WA0005</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>160.95 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default"
                                    title="IMG-20231118-WA0009.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/AK0l7PerYRYzps1KaE3fDYW6nNSFUjoh0OAyfAhL.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">IMG-20231118-WA0009</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>237.1 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default"
                                    title="IMG-20231118-WA0007.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/8e0ei1JhAvGvF45xdTQgA6KtcufKlyTnm9JeC0oS.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">IMG-20231118-WA0007</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>203.6 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
     
                        
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default"
                                    title="IMG-20231018-WA0012.jpeg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/hV6R7j0niaiBplmbwWIWRCypPMLeK3QBd3yt8L5y.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">IMG-20231018-WA0012</span>
                                            <span class="ext">.jpeg</span>
                                        </h6>
                                        <p>187.65 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="sell bada.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/TQFkyrBN7SzMxFOnRvzgcO63eIesfNShxyl3Gjdb.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">sell bada</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>153.27 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="130 CLO.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/3QyrtCDG9AmTauTH9bQtRvfhkg12oB32tI7bu4mf.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">130 CLO</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>147.72 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default"
                                    title="IMG_20231003_115628.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/Kd0ulpf3c9htCl0g6ORP3drbsqnI4H3craaZ8VuO.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">IMG_20231003_115628</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>86.76 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="YUM.jpeg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/gvnrhZXP32qLeNLaVTgkJsgAqcnPEsKuXiJg183H.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">YUM</span>
                                            <span class="ext">.jpeg</span>
                                        </h6>
                                        <p>24.87 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="COLGARTE 500 GM .jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/5Cd7jyh0I6X1E2MtreW7W74sPM7cJwozvpHrzXJc.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">COLGARTE 500 GM </span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>73.4 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="DANT KRANTI 260.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/VmFNxmJbjti9DoPBbmYtZGLx9EBzNndVeG2FW3go.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">DANT KRANTI 260</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>101.25 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="ECLARE.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/cdICvHBTvPW4skitkNNKWE8jzCKFp5FGNaQF1DEE.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">ECLARE</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>87.54 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default"
                                    title="200 GM DANT KRANTI.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/h8REPYzvfL2QNjIU4blHnupa5QG7jilh5GfgCXKK.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">200 GM DANT KRANTI</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>235.67 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="GHEE 20 MRP.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/37dfvXhfDBAUzrmNQePQmSBD4HdneKNdSMPs6gVJ.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">GHEE 20 MRP</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>119.3 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="GHEE 100.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/Psg3njn8MmVbsfo9MpbFFEW7Py6dWyZSupj9mA9C.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">GHEE 100</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>95.7 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="GHEE 200 GM.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/zGSMiilTnVe6RIrhdyVixUwqsQdbwSBaoT4Bq0nt.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">GHEE 200 GM</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>87.59 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="GHEEE 100 3..jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/eKwiH5JnVdj4j9MVMRqGJj5kEc9NNMlh3gRoVpur.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">GHEEE 100 3.</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>102.62 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="GHEE 500 GM.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/WPPfurB9pJv0lq2NeTwMFFTuA4QxRn6UuF3wjfyJ.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">GHEE 500 GM</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>105.96 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="ROSE POHA 1.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/dP7Wuxh1FuG1LqEPlWftnk8N7mr0wc2CP4sI093Y.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">ROSE POHA 1</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>212.42 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="138 BAJAJA AL.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/x42PiNUlJc0qQ08XqzI4GQseJ14gIGS02zwvuTPL.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">138 BAJAJA AL</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>69.55 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="10 PARLE.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/WXGvP8vW37jm4c0l9nSntiSshTSfTiFSBB8YAdYY.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">10 PARLE</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>122.89 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="50 MELODY.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/B2bbnsBP97zAuHerG3yVpRAg7WpB2eAkjRcl3yTi.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">50 MELODY</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>79.31 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default"
                                    title="10 BAJAJ ALOMND JAR.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/cX3ZCja6KnEvyTGTbXBJ2noKig4Fkhn4GjbyAsc9.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">10 BAJAJ ALOMND JAR</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>122.93 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="150 MELODY.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/LOC1HDvO0Kub4JZn6s3KpJJXrhrzNfhUHkYNiQ09.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">150 MELODY</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>87.85 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="100 MELODY.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/Hxk2jYjpNbKuSdjU09wSJ8ckkh191qKpUbkEinPU.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">100 MELODY</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>223.31 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="152 SHANTI.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/Z1j1TijiABJ7PXMCEss7jSfyg6c7n8vMxwolm5SN.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">152 SHANTI</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>68.76 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="BAJAJ 305.jpeg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/oNUQ6aNg0zgKQL9q66EXK5eHNoqcD04AzATCkwDM.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">BAJAJ 305</span>
                                            <span class="ext">.jpeg</span>
                                        </h6>
                                        <p>8.92 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="BAJAJ 10 JAR.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/C3veiPE8Dol5p6SdIaGnARAgNIMrKAGNnyZz23nH.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">BAJAJ 10 JAR</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>83.57 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="152.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/0tDB5TegKw3dIAuyFUHWRnDyrEkQdjxm1Dxlr6Vg.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">152</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>62.51 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="100 KISSAM.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/LbWfxEch2zTArCR19fYXRaOHYSP1HRjY6epOwMpw.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">100 KISSAM</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>92.93 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="100V KISSAN.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/D80mo11J7ThomFqPUj41YL5SIBkL58UpHtStO0HM.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">100V KISSAN</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>59.93 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="10 MANECO.webp">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/vFWQFYQrotULom96KlbNvCZFTAq6z2V8YZlS5xhH.webp"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">10 MANECO</span>
                                            <span class="ext">.webp</span>
                                        </h6>
                                        <p>16.98 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="10 PARLE.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/6pceDaDBklJ0oEQjgixC8wpJcUFa7PXwoJSvxxih.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">10 PARLE</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>122.89 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="165 DETTOL.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/mmRJnt12SJEVJz1uUHRVjKy9iKUp1DJOmb2dK3Hd.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">165 DETTOL</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>65.76 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="165.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/dyPtH1Xnf6RKBcoOVqkKIPsvt3qsP6R7zl79TOMh.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">165</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>64.15 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="180 DETTOL.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/nBRmllAmmbrEelrq8dfUfziDTvYS5c4saIOfhXY7.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">180 DETTOL</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>59.24 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="KIT KAT 2.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/rRObhBV8vGigs9J4pCdOIw6ONHQ4ohlDvgQh91r8.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">KIT KAT 2</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>231.17 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="KIT KAT.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/IxKLXI8Yq40iwxFfTTDzJvwWytkxwOjc8gUM8Lf8.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">KIT KAT</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>249.55 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="SWADISHT.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/tsG7ovpxlhRTKXNDoxxQSHi6rw7NTcXWurFiaHkU.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">SWADISHT</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>48.86 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="MAZELO.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/F8aURvjRvyUeBXdTwx35b0W4Il9rSNTQHaHa64Bt.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">MAZELO</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>94.48 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default"
                                    title="Health-Rich-Refined-Soyabean-Oil-Pouch-500-ml-Set-.webp">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/jR1Ol8WbV0IYdbIqnOc4FRmkPWeRtU8kjx5EAmiA.webp"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span
                                                class="text-truncate title">Health-Rich-Refined-Soyabean-Oil-Pouch-500-ml-Set-</span>
                                            <span class="ext">.webp</span>
                                        </h6>
                                        <p>51.18 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="BAJAJ 305.jpeg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/53nK6pFap6ErcZP5lrR0Z75lEh879ImEDn1IJBAo.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">BAJAJ 305</span>
                                            <span class="ext">.jpeg</span>
                                        </h6>
                                        <p>8.92 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default"
                                    title="WhatsApp Image 2023-09-30 at 09.39.20_8a152a1b.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/CO6MBtsRutDls4gwTJmPCtzKRuB0Nfjtri6U14Ys.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">WhatsApp Image 2023-09-30 at
                                                09.39.20_8a152a1b</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>158.57 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default"
                                    title="WhatsApp Image 2023-09-30 at 09.39.05_8b5f47c0.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/oaP5Hfzcy6MabGeU9xDeLOVN1kStgpV9AeUexjpw.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">WhatsApp Image 2023-09-30 at
                                                09.39.05_8b5f47c0</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>118.16 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default"
                                    title="IMG_20230927_144506.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/eeH9FmMFsbWZbyVPOgyE5dIiUNnIJnZ6VgX4SkbK.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">IMG_20230927_144506</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>252.91 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default" title="sachamoti.jpg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/MZaHKrnlVOy2q9DHAA3SJQbvbkrEue4ESTDA1i6Y.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">sachamoti</span>
                                            <span class="ext">.jpg</span>
                                        </h6>
                                        <p>24.48 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default"
                                    title="WhatsApp Image 2023-08-28 at 4.22.34 PM.jpeg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/BxM0Ayn64jIUxdZDABZgPXO7UOukv46ATEK3dUbk.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">WhatsApp Image 2023-08-28 at 4.22.34
                                                PM</span>
                                            <span class="ext">.jpeg</span>
                                        </h6>
                                        <p>28.84 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto w-140px w-lg-220px">
                            <div class="aiz-file-box">
                                <div class="dropdown-file">
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a class="dropdown-link" href="#">
                                        <i class="bi bi-download"></i>
                                    </a>

                                </div>
                                <div class="card card-file aiz-uploader-select c-default"
                                    title="images - 2023-08-20T204127.778.jpeg">
                                    <div class="card-file-thumb">
                                        <img src="https://www.nakodatraders.com/public/uploads/all/HkNqQfCPzRKgpzBpN66L1vhzF5n2rNANL4LFSDZ2.jpg"
                                            class="img-fit">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="d-flex">
                                            <span class="text-truncate title">images - 2023-08-20T204127.778</span>
                                            <span class="ext">.jpeg</span>
                                        </h6>
                                        <p>51.87 KB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-top d-md-flex justify-content-between align-items-center p-6">
                        <span>Showing 1 to 8 of 12 entries</span>
                        <nav class="mt-2 mt-md-0">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled"><a class="page-link" href="#!">Previous</a></li>
                                <li class="page-item"><a class="page-link active" href="#!">1</a></li>
                                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>