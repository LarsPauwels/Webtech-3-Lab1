<?php
	require_once("header.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="css/all-filters.css">
</head>
<body>

	<div class="container">
		<article class="clearfix">
			<div class="clearfix">
				<section class="small-section">
					<div class="inner-section clearfix">
						<div class="left-section">
							<p>
								914,001
							</p>
							<span>
								Visits
							</span>
						</div>
						<div class="left-section">
							<i class="fa fa-users" aria-hidden="true"></i>
						</div>
					</div>
				</section>

				<section class="small-section">
					<div class="inner-section clearfix">
						<div class="left-section">
							<p>
								46.41%
							</p>
							<span>
								Bounce Rate
							</span>
						</div>
						<div class="left-section">
							<i class="fa fa-backward" aria-hidden="true"></i>
						</div>
					</div>
				</section>

				<section class="small-section">
					<div class="inner-section clearfix">
						<div class="left-section">
							<p>
								4,054,876
							</p>
							<span>
								Pageviews
							</span>
						</div>
						<div class="left-section">
							<i class="fa fa-eye" aria-hidden="true"></i>
						</div>
					</div>
				</section>

				<section class="small-section">
					<div class="inner-section clearfix">
						<div class="left-section">
							<p>
								46.43%
							</p>
							<span>
								Growth Rate
							</span>
						</div>
						<div class="left-section">
							<i class="fa fa-signal" aria-hidden="true"></i>
						</div>
					</div>
				</section>
			</div>

			<div class="clearfix bottom">
				<section class="section2 large-section">
					<div class="inner-section2">
						<div class="heading-section2 clearfix">
							<h4>
								Wall of Shame Filter
							</h4>
						</div>
						<div class="body-table">
							<table>
								<tr>
									<th>
										Campaign
									</th>
									<th>
										Client
									</th>
									<th>
										Changes
									</th>
									<th>
										Budget
									</th>
									<th>
										Status
									</th>
								</tr>
								<tr>
									<td class="media line">
										Facebook
									</td>
									<td class="client line">
										Beavis
									</td>
									<td class="changes line">
										<i class="fa fa-sort-asc" aria-hidden="true"></i>
										<span>
											2.43%
										</span>
									</td>
									<td class="media line">
										&dollar;1478
									</td>
									<td class="status line">
										<span>
											Active
										</span>
									</td>
								</tr>
								<tr>
									<td class="media line">
										Youtube
									</td>
									<td class="client line">
										Felix
									</td>
									<td class="changes line">
										<i class="fa fa-sort-asc" aria-hidden="true"></i>
										<span>
											1.43%
										</span>
									</td>
									<td class="media line">
										&dollar;951
									</td>
									<td class="status line">
										<span class="closed">
											Closed
										</span>
									</td>
								</tr>
								<tr>
									<td class="media line">
										Twitter
									</td>
									<td class="client line">
										Cannibus
									</td>
									<td class="changes line red">
										<i class="fa fa-sort-desc" aria-hidden="true"></i>
										<span>
											-8.43%
										</span>
									</td>
									<td class="media line">
										&dollar;632
									</td>
									<td class="status line">
										<span class="hold">
											Hold
										</span>
									</td>
								</tr>
								<tr>
									<td class="media line">
										Spotify
									</td>
									<td class="client line">
										Neosoft
									</td>
									<td class="changes line">
										<i class="fa fa-sort-asc" aria-hidden="true"></i>
										<span>
											7.43%
										</span>
									</td>
									<td class="media line">
										&dollar;325
									</td>
									<td class="status line">
										<span style="background-color: #777;">
											Hold
										</span>
									</td>
								</tr>
								<tr>
									<td class="media">
										Instagram
									</td>
									<td class="client">
										Hencework
									</td>
									<td class="changes">
										<i class="fa fa-sort-asc" aria-hidden="true"></i>
										<span>
											9.43%
										</span>
									</td>
									<td class="media">
										&dollar;258
									</td>
									<td class="status">
										<span>
											Active
										</span>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</section>
			</div>
		</article>

		<?php
			require_once("footer.php");
		?>

	</div>

	<script src="js/index.js"></script>
</body>
</html>