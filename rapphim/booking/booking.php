<link rel="stylesheet" href="Style_Booking.Css">
<body>
  <section id="section">
    <div class="container">
      <!-- leftCont -->
      <div class="leftCont">
        <div class="leftMainCont">
          <div class="legendContainer">
            <ul>
              <li>
                <div class="seat legend"></div>
                <small>CHỖ NGỒI CÓ SẴN</small>
              </li>
              <li>
                <div class="seat legend selected"></div>
                <small>CHỖ NGỒI BẠN CHỌN</small>
              </li>
              <li>
                <div class="seat legend occupied"></div>
                <small>CHỖ NGỒI ĐÃ CHỌN</small>
              </li>
            </ul>
          </div>
          <!-- seat Container -->
          <div class="mainSeatCont">
            <div class="screen">
              <small>SCREEN</small>
            </div>
            <div class="seatCont" id="seatCont">
              <div class="seatRowCont1 seatRowCont">
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat occupied"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat occupied"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
              </div>
              <div class="seatRowCont2 seatRowCont">
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat occupied"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat occupied"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat occupied"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat occupied"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
              </div>
              <div class="seatRowCont3 seatRowCont">
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat occupied"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
                <div class="row">
                  <div class="seat"></div>
                  <div class="seat occupied"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                  <div class="seat"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Right Cont -->
      <div class="rightCont">
        <div class="confirmCont">
          <div class="rightTopCont">
            <!-- moviename -->

            <div class="movieInfo">
             <div class="selectMovie">
               <label>
                  <p>CHỌN PHIM</p>
                  <select id="selectMovie"></select>
                </label>
              </div> 
              <div class="movieName">
              </div>
              <div class="moviePrice">
                <p></p>
                <h1 id="moviePrice">Price:  45000 đ</h1>
              </div>
              <div class="dateCont">
                <p>DATE</p>
                <p class="dateOn">Wed , 31th May</p>

              </div>
            </div>
          </div>    
          <div class="rightBottomCont">
            <div class="selectedSeatCont">
              <p>CHỖ NGỒI CỦA BẠN</p>
              <div class="selectedSeatsHolder" id="selectedSeatsHolder">
                <span class="noSelected">TRỐNG</span>
              </div>
            </div>
            <!-- Seat number and price -->

            <div class="numberOfSeatsCont"> 
              <div class="numberOfSeatEl">
                <p><span id="numberOfSeat">0</span> CHỖ NGỒI</p>
              </div>
              <div class="priceCont">
                <p id="totalPrice">0 đ</p>
              </div>
            </div>
            <!-- button Cont -->

            <div class="buttonCont">
              <div class="cancelBtn">
                <button id="cancelBtn">HỦY THAO TÁC</button>
              </div>
              <div class="proceedBtnEl">
                <button id="proceedBtn" onclick.href='location:themphim.php'>THÊM VÀO GIỎ HÀNG</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
<script src="JS_Booking.js"></script>