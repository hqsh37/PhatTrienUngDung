
</head>

<body>
    <div class="container">
        <div class="body">
        <section>
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-8 d-flex align-items-center justify-content-center content mx-auto">
                    <p class="bg-primary p-2">Danh Sách Kế Hoạch Dự Chi</p>
                </div>
            </div>
            <div class="container">
            <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Tên</th>
      <th scope="col">Số Tiền </th>
      <th scope="col">Thời Gian</th>
      <th scope="col">Hoạt Động</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">Đi Đà Lạt</td>
      <td>4 500 000</td>
      <td>14/12/2023 - 13/04/2023</td>
      <td>
      <button type="button" data-toggle="modal" class="rs-btn" data-target="#modal-sua">Sửa </button>/
        <button type="button" data-toggle="modal" class="rs-btn" data-target="#modal-xoa">xóa </button>
        </td>
    </tr>
    <tr>
      <td scope="row">Mua IP 15</td>
      <td>35 000 000</td>
      <td>14/12/2023 - 13/04/2023</td>
      <td>
      <button type="button" data-toggle="modal" class="rs-btn" data-target="#modal-sua">Sửa </button>/
        <button type="button" data-toggle="modal" class="rs-btn" data-target="#modal-xoa">xóa </button>
        </td>
    </tr>
    <tr>
      <td scope="row">Mua MacBook</td>
      <td>45 000 000</td>
      <td>14/12/2023 - 13/04/2023</td>
      <td>
      <button type="button" data-toggle="modal" class="rs-btn" data-target="#modal-sua">Sửa </button>/
        <button type="button" data-toggle="modal" class="rs-btn" data-target="#modal-xoa">xóa </button>
        </td>
    </tr>
    <tr>
      <td scope="row">Đi Hà Nội</td>
      <td>5 000 000</td>
      <td>14/12/2023 - 13/04/2023</td>
      <td>
      <button type="button" data-toggle="modal" class="rs-btn" data-target="#modal-sua">Sửa </button>/
        <button type="button" data-toggle="modal" class="rs-btn" data-target="#modal-xoa">xóa </button>
        </td>
    </tr>
    <tr>
      <td scope="row">Mua Nhà</td>
      <td>2 445 000 000</td>
      <td>14/12/2023 - 13/04/2023</td>
      <td>
        <button type="button" data-toggle="modal" class="rs-btn" data-target="#modal-sua">Sửa </button>/
        <button type="button" data-toggle="modal" class="rs-btn" data-target="#modal-xoa">xóa </button>
        </td>
    </tr>
  </tbody>
</table>
            </div>
        <div class="row d-flex justify-content-end">
        <td>
        <button type="button" data-toggle="modal" class="btn btn-outline-secondary" data-target="#modal-them">Thêm Kế Hoạch Dự Chi </button>
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
                         <form >
                         <div class='form-group'>
                                    <label for='sodu-tk'>Tên</label>
                                    <input type='text' class='form-control' id='sodu-tk' aria-describedby='emailHelp'>
                                </div>
                                <div class='form-group'>
                                    <label for='ten-tk'>Số Tiền</label>
                                    <input type='text' class='form-control' id='ten-tk' aria-describedby='emailHelp'>
                                </div>
                                <div class='form-group'>
                                    <div class="col-3 row form-group">
                                            <label for="">Thời Gian </label>
                                        </div>
                                            <input type="date" name="" id="dateDK" class="form-control">
                                        </div><br>
                         </form>
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
                            <p>Bạn có chắc muốn xóa kế hoạch này không ?</p>
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
                        <form >
                         <div class='form-group'>
                                    <label for='sodu-tk'>Tên</label>
                                    <input type='text' class='form-control' id='sodu-tk' aria-describedby='emailHelp'>
                                </div>
                                <div class='form-group'>
                                    <label for='ten-tk'>Số Tiền</label>
                                    <input type='text' class='form-control' id='ten-tk' aria-describedby='emailHelp'>
                                </div>
                                <div class='form-group'>
                                    <div class="col-3 row form-group">
                                            <label for="">Thời Gian </label>
                                        </div>
                                            <input type="date" name="" id="dateDK" class="form-control">
                                        </div><br>
                         </form>
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