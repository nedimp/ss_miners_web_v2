<!DOCTYPE html>

<html lang="$ContentLocale">
<head>
	<% base_tag %>
	<title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	$MetaTags(false)
	<% require css('css/home-page.css') %>
	<link rel="shortcut icon" href="$resourceURL('themes/simple/images/favicon.ico')" />

</head>
<body>
$ElementalArea

<div class="main" role="main">
	
	<% loop $HomePageImages %>
		<div class="header-container hidden" style="background-image: url('$Image.URL')">
				<div class="header-content">
					<div class="left-pane">
						<div class="header">
							$Title
						</div>
						<div class="subheader">
							$Subtitle
						</div>
					</div>
					<div class="right-pane">
						<div class="video">VIDEO</div>
						<div class="button">READ MORE</div>
					</div>
				</div>
		</div>
	<% end_loop %>

	<div class="section join-us">
		<div class="content two-pane">
			<div class="left-pane center-content">
				<img src="$JoinUs_Image.URL" alt="" />
			</div>
			<div class="right-pane">
				<h2>$JoinUs_Title</h2>
				<h3>$JoinUs_Subtitle</h3>
				<p>$JoinUs_Content</p>
	
				<div class="two-pane">
					<div type="button" class="button inverted">$JoinUs_JoinLabel</div>
					<div type="button" class="button outline">$JoinUs_EventsLabel</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section rooster">
		<div class="content">
			<div class="two-pane">
				<h2>$Rooster_Title</h2>
				<div class="team-logos">
					<% loop $Teams %>
						<div href="#rooster-$Slug" data-teamid="$ID"><img src="$Logo.URL" alt=""></img></div>
					<% end_loop %>
				</div>
			</div>
			<div class="hscroller">
				<% loop $Teams %>
					<div class="players hidden" data-teamid="$ID">
						<% loop $Players %>
							<div class="player">
								<div class="img-holder">
									<img class="full-width"></img>
								</div>
								<div class="name">$FirstName $LastName</div>
								<div class="position">$Position</div>
							</div>
						<% end_loop %>
					</div>
				<% end_loop %>
			</div>
		</div>
	</div>
</div>

<% require javascript('js/home-page.js') %>
</body>
</html>
