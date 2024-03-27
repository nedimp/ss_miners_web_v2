<% require themedJavascript('_rooster-element') %>
<% require themedCSS('_rooster-element') %>
<div class="section rooster">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>$Title</h2>
            </div>
            <div class="col-6 team-logos">
                <% loop $Teams %>
                    <div data-teamid="$ID"><img src="$Logo.URL" alt="$Name"></img></div>
                <% end_loop %>
            </div>
        </div>
        
        <% loop $Teams %>
            <div class="swiper d-none players" data-teamid="$ID">
                <div class="swiper-wrapper">
                    <% loop $Players %>
                        <div class="swiper-slide player">
                            <div class="img-holder">
                                <div class="number">$Number</div>
                                <% if $Image.URL %>
                                    <img class="h-100" src="$Image.URL"></img>
                                <% else %>
                                    <img class="h-100" src="/assets/avatar.png"></img>
                                <% end_if %>
                                <div class="button inverted">PROFIL</div>
                            </div>
                            <div class="name">$FirstName $LastName</div>
                            <div class="position">$Position</div>
                        </div>
                    <% end_loop %>
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        <% end_loop %>
    </div>
</div>