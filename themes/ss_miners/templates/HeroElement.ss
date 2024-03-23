<% require themedJavascript('_hero-element') %>
<% require themedCSS('_hero-element') %>
<% loop $Images %>
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