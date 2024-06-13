<?php include('header.php') ?>
<style>
.align-items-center {
    align-items: center !important;
    justify-content: center;
}
a.dropdown-item {
    gap: 2px;
}
.table-centered td,
.table-centered th {
    text-align: center;
    vertical-align: middle !important;
}
</style>
<div class="container">
    <div class="row mb-8">
        <div class="col-md-12">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                <div>
                    <h2>Wallet</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.php" class="text-inherit">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Wallet</li>
                        </ol>
                    </nav>
                </div>
                <div>
                    <a href="add-wallet.php" class="btn btn-primary">+ Manage Wallet</a>
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
                                <input class="form-control" type="search" placeholder="Search Customers"
                                    aria-label="Search" />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table
                            class="table table-centered table-hover table-borderless mb-0 table-with-checkbox text-nowrap">
                            <thead class="bg-light">
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="checkAll" />
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th>User Name</th>
                                    <th>Amount</th>
                                    <th>Payment Method</th>
                                    <th>Payemnt Detail</th>
                                    <th> Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="pe-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="customerSeven" />
                                            <label class="form-check-label" for="customerSeven"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-2">
                                                <a href="#" class="text-inherit">Wayne Rossman</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$50</td>
                                    <td>online</td>
                                    <td> incentive</td>
                                    <td>18 March 2023</td>


                                    <td>
                                        <a class="dropdown-item" href="#">
                                            <i class="bi bi-pencil-square"></i>
                                            Edit
                                        </a>
                                </tr>
                                <tr>
                                    <td class="pe-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="customerEight" />
                                            <label class="form-check-label" for="customerEight"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-2">
                                                <a href="#" class="text-inherit">Richard Shelton</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$50</td>
                                    <td>online</td>
                                    <td> incentive</td>
                                    <td>12 March 2023</td>


                                    <td>
                                        <a class="dropdown-item" href="#">
                                            <i class="bi bi-pencil-square"></i>
                                            Edit
                                        </a>
                                </tr>
                                <tr>
                                    <td class="pe-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="customerNine" />
                                            <label class="form-check-label" for="customerNine"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-2">
                                                <a href="#" class="text-inherit">Stephanie Morales</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$50</td>
                                    <td>online</td>
                                    <td> incentive</td>
                                    <td>22 Feb 2023</td>


                                    <td>
                                        <a class="dropdown-item" href="#">
                                            <i class="bi bi-pencil-square"></i>
                                            Edit
                                        </a>
                                </tr>
                                <tr>
                                    <td class="pe-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="customerTen" />
                                            <label class="form-check-label" for="customerTen"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-2">
                                                <a href="#" class="text-inherit">Stephanie Morales</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$50</td>
                                    <td>online</td>
                                    <td> incentive</td>
                                    <td>22 Feb 2023</td>


                                    <td>
                                        <a class="dropdown-item" href="#">
                                            <i class="bi bi-pencil-square"></i>
                                            Edit
                                        </a>
                                </tr>
                                <tr>
                                    <td class="pe-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="customerEleven" />
                                            <label class="form-check-label" for="customerEleven"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-2">
                                                <a href="#" class="text-inherit">Pasquale Kidd</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$50</td>
                                    <td>online</td>
                                    <td> incentive</td>
                                    <td>22 Feb 2023</td>


                                    <td>
                                        <a class="dropdown-item" href="#">
                                            <i class="bi bi-pencil-square"></i>
                                            Edit
                                        </a>
                                </tr>
                            </tbody>
                        </table>
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