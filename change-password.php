<!DOCTYPE html>
<html>
<head>
	<title>Food Token</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #ffffff;
    margin: 0;
    padding: 0;
        background-image: url(aa.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-position-x: center;
        border-right: #ffffff;
    height: 100vh;
    overflow: hidden;
}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		h1 {
			text-align: center;
			color: #333;
			margin-bottom: 20px;
		}

		h2 {
			color: #333;
			margin-bottom: 10px;
		}

		.token {
			font-size: 24px;
			font-weight: bold;
			text-align: center;
			color: #91c0ca;
			background-color: #4CAF50;
			border-radius: 5px;
			padding: 20px;
			margin-bottom: 20px;
		}

		button {
			display: block;
			margin: 0 auto;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			font-size: 16px;
			cursor: pointer;
		}

		button:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Food Token</h1>
		<h2>Select Your Meal</h2>
		<select id="meal-select">
			<option value="veg">Veg</option>
			<option value="non-veg">Non-veg</option>
		</select>
		<div class="token">Your token number for <span id="meal-display">breakfast</span> is: <span id="token-number">001</span></div>
		<button onclick="getNextToken()">Get Token</button>
	</div>

	<script>
		let breakfastTokenNumber = 1;
		let lunchTokenNumber = 1;
		let dinnerTokenNumber = 1;

		function getNextToken() {
			const mealSelectElement = document.getElementById('meal-select');
			const mealDisplayElement = document.getElementById('meal-display');
			const tokenNumberElement = document.getElementById('token-number');
			const meal = mealSelectElement.value;
			let tokenNumber = 0;

			if (meal === 'breakfast') {
				if (breakfastTokenNumber <= 1) {
					tokenNumber = breakfastTokenNumber;
					breakfastTokenNumber++;
				}
			}
			else if (meal === 'lunch') {
				if (lunchTokenNumber <= 1) {
					tokenNumber = lunchTokenNumber;
					lunchTokenNumber++;
				}
			}
			else if (meal === 'dinner') {
				if (dinnerTokenNumber <= 1) {
					tokenNumber = dinnerTokenNumber;
					dinnerTokenNumber++;
				}
			}

			mealDisplayElement.innerText = meal;
			tokenNumberElement.innerText = tokenNumber.toString().padStart(3, '0');
		}
	</script>
</body>
</html>
