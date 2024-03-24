<% require themedJavascript('_teams-element') %>
<% require themedCSS('_teams-element') %>
<div class="section teams">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>$Title</h2>
            </div>
        </div>
        
        <div class="swiper teams">
            <div class="swiper-wrapper">
                <% loop $Teams %>
                    <div class="swiper-slide team">
                        <div class="img-holder">
                            <img class="h-100" src="$Image.URL"></img>
                            <% if $Logo %>
                                <div class="logo">
                                    <img src="$Logo.URL"></img>
                                </div>
                            <% end_if %>
                        </div>
                        <div class="name">$Name</div>
                    </div>
                <% end_loop %>
            </div>
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
</div>
