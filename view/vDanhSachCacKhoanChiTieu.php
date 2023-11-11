<body>
    <div class="container">
       
        <div class="body">
            <section>
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-md-8 d-flex align-items-center justify-content-center content mx-auto">
                        <p class="bg-primary p-2">Danh Sách Các Khoản Chi Tiêu</p>
                    </div>
                </div>
                <div class="body-kct">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Hạng Mục</th>
                                <th scope="col">Số Tiền </th>
                                <th scope="col">Thời Gian</th>
                                <th scope="col">Loại Tài Khoản </th>
                                <th scope="col">Hoạt Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Ăn Uống</td>
                                <td>4 500 000</td>
                                <td>14/12/2023 - 13/04/2023</td>
                                <td>Thẻ</td>
                                <td>
                                    <button type="button" data-toggle="modal" class="rs-btn"
                                        data-target="#modal-sua">Sửa </button> /
                                    <button type="button" data-toggle="modal" class="rs-btn"
                                        data-target="#modal-xoa">xóa </button>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Con Cái</td>
                                <td>5 600 000</td>
                                <td>14/12/2023 - 13/04/2023</td>
                                <td>Thẻ</td>
                                <td>
                                    <button type="button" data-toggle="modal" class="rs-btn"
                                        data-target="#modal-sua">Sửa </button> /
                                    <button type="button" data-toggle="modal" class="rs-btn"
                                        data-target="#modal-xoa">xóa </button>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Sinh Hoạt</td>
                                <td>2 400 000</td>
                                <td>14/12/2023 - 13/04/2023</td>
                                <td>Thẻ</td>
                                <td>
                                    <button type="button" data-toggle="modal" class="rs-btn"
                                        data-target="#modal-sua">Sửa </button> /
                                    <button type="button" data-toggle="modal" class="rs-btn"
                                        data-target="#modal-xoa">xóa </button>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Du Lịch</td>
                                <td>3 400 000</td>
                                <td>14/12/2023 - 13/04/2023</td>
                                <td>Thẻ</td>
                                <td>
                                    <button type="button" data-toggle="modal" class="rs-btn"
                                        data-target="#modal-sua">Sửa </button> /
                                    <button type="button" data-toggle="modal" class="rs-btn"
                                        data-target="#modal-xoa">xóa </button>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">Thuê Nhà</td>
                                <td>45 005 000 000</td>
                                <td>14/12/2023 - 13/04/2023</td>
                                <td>Thẻ</td>
                                <td>
                                    <button type="button" data-toggle="modal" class="rs-btn"
                                        data-target="#modal-sua">Sửa </button> /
                                    <button type="button" data-toggle="modal" class="rs-btn"
                                        data-target="#modal-xoa">xóa </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row d-flex justify-content-end">
                    <td>
                        <button type="button" data-toggle="modal" class="rs-btn" data-target="#modal-them">Thêm
                            Các Khoản Chi Tiêu</button>
                    </td>
                </div>
            </section>

            <!-- Modal Sua -->
            <div class="modal fade" id="modal-sua" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sửa Thông tin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="#">
                            <div class="row form-group">
                                <div class="col-4">
                                    <label>Tên</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="txtMSSV" placeholder="">
                                    <span id="errMSSV" class="text-danger font-italic">(*)</span>
                                </div>
                            </div>
                        
                            </div>
                            <div class="row form-group">
                                <div class="col-4">
                                    <label for="">Số Tiền</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="" id="txtSDT" class="form-control" placeholder="">
                                    <span id="errSDT" class="text-danger font-italic">(*)</span> 
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-4">
                                    <label for="">Ngày Tháng Năm</label>
                                </div>
                                <div class="col-8">
                                    <input type="date" name="" id="dateDK" class="form-control">
                                    <span class="text-danger font-italic" id="errDateDK">(*)</span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-4">
                                    <label for="">Hạng Mục</label>
                                </div>
                                <div class="col-8">
                                    <select name="" id="listHoatDong" class="form-control">
                                        <option value="" selected></option>
                                        <option value="Thanh niên tình nguyện hè">Thanh niên tình nguyện hè</option>
                                        <option value="Vệ sinh môi trường">Vệ sinh môi trường</option>
                                        <option value="Tiếp sức mùa thi">Tiếp sức mùa thi</option>
                                        <option value="Tình nguyện viên chống dịch">Tình nguyện viên chống dịch</option>
                                    </select>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            <button type="button" class="btn btn-primary">Lưu lại</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Xóa -->
            <div class="modal fade" id="modal-xoa" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thông Báo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Bạn có chắc muốn xóa khoản chi tiêu này không ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            <button type="button" class="btn btn-primary">Xóa</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Thêm -->
            <div class="modal fade" id="modal-them" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tạo Khoản chi tiêu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="#">
                            <div class="row form-group">
                                <div class="col-4">
                                    <label>Tên</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" id="txtMSSV" placeholder="">
                                    <span id="errMSSV" class="text-danger font-italic">(*)</span>
                                </div>
                            </div>
                        
                            </div>
                            <div class="row form-group">
                                <div class="col-4">
                                    <label for="">Số Tiền</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="" id="txtSDT" class="form-control" placeholder="">
                                    <span id="errSDT" class="text-danger font-italic">(*)</span> 
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-4">
                                    <label for="">Ngày Tháng Năm</label>
                                </div>
                                <div class="col-8">
                                    <input type="date" name="" id="dateDK" class="form-control">
                                    <span class="text-danger font-italic" id="errDateDK">(*)</span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-4">
                                    <label for="">Hạng Mục</label>
                                </div>
                                <div class="col-8">
                                    <select name="" id="listHoatDong" class="form-control">
                                        <option value="" selected></option>
                                        <option value="Thanh niên tình nguyện hè">Thanh niên tình nguyện hè</option>
                                        <option value="Vệ sinh môi trường">Vệ sinh môi trường</option>
                                        <option value="Tiếp sức mùa thi">Tiếp sức mùa thi</option>
                                        <option value="Tình nguyện viên chống dịch">Tình nguyện viên chống dịch</option>
                                    </select>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            <button type="button" class="btn btn-primary">Lưu</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
       
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>