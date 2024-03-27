<% require themedJavascript('_sponsor-rotator') %>
<% require themedCSS('_sponsor-rotator') %>
<div class="sponsor-rotator">
    <div class="sponsor-logos">
        <% loop $Sponsors %>
            <div class="sponsor-logo">
                <img src="$Logo.URL" alt="$Title" width="200" />
            </div>
        <% end_loop %>
    </div>
</div>
