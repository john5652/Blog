<html>
<head>
	<title>WoW Lister</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">	
<link rel="stylesheet" href="/css/main.css">

	<style>

	body {
		background-image: url("/img/auction.jpg");
		background-attachment: fixed;
	}

	table {
		color: gold;
	}

	.well{
		background-color: black;
		opacity: .7;
		margin-top: 150px;
	}

	h1 {

		color: gold;
		font-weight: bolder;
		opacity: 1.0;
	}

	 </style>

	 <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script>
	 <script>var wowhead_tooltips = { "colorlinks": true, "iconizelinks": true, "renamelinks": true }</script>
</head>
<body>

	@include('partials.navbar')

	<div class="container well">
		<h1 id="list_title">WoW Lister</h1>

		<? if(isset($errors)) : ?>
			<ul>
			<? foreach ($errors as $error) : ?>
				<li><? $error; ?></li>
			<? endforeach; ?>
			</ul>
		<? endif; ?>

		<div class="col-md-12">
			<table class="table table-bordered">
				<tr>
					<th>Item Name</th>
					<th>Item Type</th>
					<th>Date Listed</th>
					<th>Price</th>
					<th>Description</th>
					<th>Image</th>
				</tr>

				<? foreach ($items as $item): ?>
				<tr>
					<td><?= $item['item_name']; ?></td>
					<td><?= $item['item_type']; ?></td>
					<td><?= date_format(date_create($item['date_listed']),'l, F j, Y'); ?></td>
					<td><?= number_format($item['price'], 2); ?></td>
					<td><?= $item['description']; ?></td>
					<td><a href="http://www.wowhead.com/item=<?= $item['item_number']; ?>"></a></td>
				</tr>	
			<? endforeach; ?>
		</table>
	</div>

	
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

