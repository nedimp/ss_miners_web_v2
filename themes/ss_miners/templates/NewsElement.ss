<% require themedJavascript('_news-element') %>
<% require themedCSS('_news-element') %>
<div class="section news">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>$Title</h2>
            </div>
        </div>
        
        <div class="swiper">
            <div class="swiper-wrapper">
                <% loop $News %>
                    <div class="swiper-slide news-card">
                        <div>
                            <img class="w-100 h-100 object-fit-cover" src="$Image.URL" />
                        </div>
                        <div class="news-card-content">
                            <h2>$Title</h2>
                            <div>$Summary</div>
                            <div class="button">READ MORE</div>
                        </div>
                    </div>
                <% end_loop %>
            </div>
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
</div>
