@extends('theme.default.pages.dashboard.home')
@section('dashboard-layanan')
    <div class="card">
        <div class="card-header">
            <div class="d-md-flex">
                <form class="form-inline" action="#" method="get">
                    <div class="form-group d-flex align-items-center mb-0"> <i class="fa fa-search"></i>
                        <input class="form-control-plaintext" type="text" placeholder="Search...">
                    </div>
                </form>
                <div class="flex-grow-1 text-end d-md-block d-none">
                    <form class="d-inline-flex" action="#" method="POST" enctype="multipart/form-data" name="myForm">
                        <div class="btn btn-primary" onclick="getFile()"> <i data-feather="plus-square"></i>Add New
                        </div>
                        <div style="height: 0px;width: 0px; overflow:hidden;">
                            <input id="upfile" type="file" onchange="sub(this)">
                        </div>
                    </form>
                    <div class="btn btn-outline-primary ms-2"><i data-feather="upload"> </i>Upload </div>
                </div>
            </div>
        </div>
        <div class="card-body file-manager">
            <h5 class="mb-2">Detail Pelayanan</h5>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ipsa, enim unde debitis consequuntur deserunt ut, porro cum quisquam blanditiis et numquam praesentium soluta? Autem est recusandae eveniet hic, reiciendis beatae debitis repellendus eum deserunt cumque optio commodi alias ducimus delectus, possimus voluptate cupiditate ratione provident quibusdam. Voluptatibus, nisi esse amet quaerat dolor eius. Officiis vel molestias nemo ullam numquam quos assumenda ipsa fuga explicabo praesentium vero maiores excepturi labore nulla reprehenderit, minima modi ab nostrum! Laudantium doloribus illum, molestiae incidunt dolorum expedita eveniet itaque debitis alias cumque, et sunt fugiat. Iste ut atque perspiciatis impedit officiis! Nihil fuga ipsam fugiat nesciunt! Debitis doloribus tenetur earum odio ad deserunt cupiditate impedit omnis dolor perferendis quaerat in, mollitia, natus aliquam, voluptatibus facere laboriosam molestias error fugiat similique ex porro quam! Maiores corrupti voluptate nobis aliquid debitis similique ipsam nisi quo, quis rerum quidem libero voluptatum numquam alias illo, sequi exercitationem cum repellat minus quos. Accusamus nostrum magnam iure, pariatur ad dolore error sequi ex fuga rerum exercitationem doloremque reprehenderit delectus odit deserunt ipsam molestias adipisci asperiores distinctio numquam modi dignissimos! Necessitatibus porro reiciendis totam perspiciatis dolorum natus molestiae enim vitae deleniti quidem. Distinctio quae dolorum voluptatem eligendi ipsum aliquam architecto id.
        </div>
    </div>
@endsection
