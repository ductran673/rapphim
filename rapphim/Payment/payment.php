<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <!-- <p>Hint: Design a credit card checkout form or page. Don't forget the important elements such as the numbers, dates, security numbers, etc. (It's up to you!) Don't forget to share on Dribbble and/or Twitter when you're done.</p> -->

<div class="container">
	
	<div class="breadcrumbs">
		<div class="breadcrumb-item">
			
		</div>
		<div class="breadcrumb-item">
			
		</div>
		<div class="breadcrumb-item current">
			<span class="number"></span>
			<span class="label">THANH TOÁN</span>
		</div>
		<div class="breadcrumb-item">
			
		</div>
	</div>
	
	<div class="product">
		<img src="../img/mov10.jpg">
		<h3>TRAIN TO BUSAN</h3>
		<p>45.000đ/seat</p>
		
		<table class="information">
			<tr>
				<td class="label">Xuất chiếu : </td>
				<td>9:00</td>
			</tr>
			<tr>
				<td class="label break">Ghế : </td>
				<td>1A;2A</td>
			</tr>
			<tr>
				<td class="label">Tổng phụ : </td>
				<td>180.000đ</td>
			</tr>
			<tr>
				<td class="label">Dịch vụ : </td>
				<td></td>
			</tr>
			<tr>
				<td class="label break">GTGT : </td>
				<td></td>
			</tr>
			<tr>
				<td class="label">Tổng hóa đơn</td>
				<td class="label">....</td>
			</tr>
		</table>
	</div>
	
	<form>
		<div class="input-group">
			<label for="cc-number">Credit Card Number</label>
			<input type="text" name="cc-number">
		</div>

		<div class="cc-info">
			<div class="input-group month">
				<label>Month</label>
				<input type="number" name="exp-month" min="1" max="12">
			</div>

			<label class="slash">/</label>

			<div class="input-group year">
				<label>Year</label>
				<input type="number" name="exp-year" min="2016" max="2025">
			</div>

			<div class="input-group ccv">
				<label for="ccv">Security Code</label>
				<input type="number" name="ccv">
			</div>
		</div>
		
		<button>Next</button>
	</form>
</div>
</body>
<script src="payment.css"></script>
</html>