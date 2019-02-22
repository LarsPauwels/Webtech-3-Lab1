<?php
	require_once("header.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>

	<?php
		if($_SESSION["welcome"] == true) {
	?>

		<div id='message'>
			<div id="loader-message">
			</div>
			<div id="inner-message">
				<i class="fa fa-check" aria-hidden="true"></i>
				<i class='fa fa-times' aria-hidden='true' id="close-message"></i>
				<h2>
					Welcome back Bob
				</h2>
				<span>Use the predefined ones, or specify a custom position object.</span>
			</div>
		</div>
	<?php
		$_SESSION["welcome"] = true;
		}
	?>

	<div class="container">
		<article class="clearfix">
			<div class="clearfix">
				<section class="small-section">
					<div class="inner-section clearfix">
						<div class="left-section">
							<p id="users">
								0
							</p>
							<span>
								Users
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
							<p id="banned">
								0
							</p>
							<span>
								Banned Users
							</span>
						</div>
						<div class="left-section">
							<i class="fa fa-ban" aria-hidden="true"></i>
						</div>
					</div>
				</section>

				<section class="small-section">
					<div class="inner-section clearfix">
						<div class="left-section">
							<p id="messages">
								0
							</p>
							<span>
								Messages
							</span>
						</div>
						<div class="left-section">
							<i class="fa fa-comments" aria-hidden="true"></i>
						</div>
					</div>
				</section>

				<section class="small-section">
					<div class="inner-section clearfix">
						<div class="left-section">
							<p id="blocked">
								0
							</p>
							<span>
								Blocked Messages
							</span>
						</div>
						<div class="left-section">
							<i class="fa fa-commenting" aria-hidden="true"></i>
						</div>
					</div>
				</section>
			</div>

			<div class="clearfix bottom">
				<section class="section2 large-section">
					<div class="inner-section2">
						<div class="heading-section2 clearfix">
							<h4>
								Wall of Shame Preview
							</h4>
						</div>
						<div class="body-table" id="chat-container">
							<p id="chat">{{m.message}} - {{m.date | date:'medium'}}</p>
						</div>
						<div>
							<div class="form-group">
			                    <input type="text" class="form-control" placeholder="Message here...">
			                    <button type="submit" class="btn btn-default" id="send">Send</button>
			                    <button type="submit" class="btn btn-default" id="auto">Auto</button>
			                </div>
						</div>
					</div>
				</section>
			</div>

			<div class="clearfix bottom" style="margin-top: 90px;">
				<section class="section2 large-section" style="width: 66.66666666%; float: left;">
					<div class="inner-section2">
						<div class="heading-section2 clearfix">
							<h4>
								Wall of Shame Filter
							</h4>
						</div>
						<div class="body-table">
							<table id="append">
								<tr>
									<th>
										Users
									</th>
									<th>
										Messages
									</th>
									<th>
										Status
									</th>
								</tr>
							</table>
						</div>
					</div>
				</section>

				<section class="small-section" style="float: left;">
					<div class="inner-section2">
						<div class="heading-section2 clearfix" style="margin: 0;">
							<h4>
								Wall of Shame Filter
							</h4>
						</div>
						<div class="body-table">
							<table id="usersShow">
								<tr>
									<th>
										Full name
									</th>
									<th>
										Username
									</th>
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

	<script src="js/dashboard.js"></script>
	<script src="js/chat.js"></script>
</body>
</html>