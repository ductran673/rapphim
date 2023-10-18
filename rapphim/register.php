<section id="register">
        <div class="container-register" >
          <div class="form">
            <div>
              <h1>Đăng ký thành viên</h1>
            </div>
            <form action="" method="post">
              <div class="input">
                <label for="name">Họ và tên</label>
                <input type="text" name="name" id="name" required/>
              </div>
              <div class="input"> 
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="ex:example@gmail.com" required/>
              </div>
              <div class="input">
                <label for="address">Địa chỉ</label>
                <input type="text" name="address" id="address"  required/>
              </div>
              <div class="input">
                <label for="phone">Số điện thoại</label>
                <input type="text" name="phone" id="phone" required />
              </div>
              <div class="input gender">
                <div class="male">
                  <input type="radio" name="gender" id="male" value="nam" required>
                  <label for="male">Nam</label>
                </div>
                <div class="female">
                  <input type="radio" name="gender" value="nữ" id="female" required>
                  <label for="female">Nữ</label>
                </div>
              </div>
              <div class="input">
                <label for="username">Tên đăng nhập</label>
                <input type="text" name="username" id="username" required/>
              </div>
              <div class="input">
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" id="password" onkeyup="checkPass(this.value)" required/>
                <i id="check_pass" style="font-size: 8px; color:red"></i>
              </div>
              <div class="input" style="margin-top: 10px;">
                <label for="repassword">Nhập lại mật khẩu</label>
                <input type="password" name="repassword" id="repassword"  required onkeyup="passAgain(this.value)"/>
                <i id="passAgain" style="font-size: 8px; color:red"></i>
              </div>
              <div class="input">
                <input id="sm" type="submit" value="Đăng ký" name="submit" disabled/>
              </div>
            </form>
          </div>
        </div>
</section>