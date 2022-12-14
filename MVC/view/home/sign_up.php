<section class="container">
        <div class="row justify-content-around">
            <form action="" method="post" class="col-md-6 bg-light p-3 my-3">
                <h1 class="text-center text-uppercase h3 py-3 text-primary">Đăng kí tài khoản</h1>

                <div class="form-group">
                    <label for="fullname">Họ và tên</label>
                    <input type="text" id="fullname" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" id="username" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="text" id="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="gender">Giới tính</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="gender" id="male" class="form-check-input" checked>
                            <label for="male" class="form-check-lable">Nam</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="gender" id="female" class="form-check-input" checked>
                            <label for="female" class="form-check-lable">Nữ</label>
                        </div>
                    </div>
                   
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="avatar">Ảnh đại diện</label>
                    <input type="file" id="avatar" name="imager">
                </div>

                <div class="form-group">
                    <label for="address">Địa chỉ</label>
                    <input type="text" id="address" name="address" class="form-control">
                </div>

                <div class="form-group">
                    <label for="phone">Số điện thoại</label>
                    <input type="" id="phone" name="phone" class="form-control">
                </div>

                <a href="login.html" class="py-3">Đã có tài khoản?</a>

                <div class="py-3">
                    <button type="submit" class="btn-primary btn btn-block ">Đăng kí</button>
                </div>
            </form>
        </div>
    </section>
