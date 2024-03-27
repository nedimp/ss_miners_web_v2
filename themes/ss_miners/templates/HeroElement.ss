<% require themedJavascript('_hero-element') %>
<% require themedCSS('_hero-element') %>
<div class="section hero">
    <div class="swiper">
        <div class="swiper-wrapper">
            <% loop $Images %>
                <div class="swiper-slide">
                    <div class="hero-content">
                        <img src="$Image.URL" />
                        <div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-8">
                                        <h1>$Title</h1>
                                        <p>$Subtitle</p>
                                    </div>
                                    <div class="col-1">
                                    </div>
                                    <div class="col-3">
                                        <div class="video">VIDEO</div>
                                        <div class="button">READ MORE</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <% end_loop %>
        </div>
        <div class="container position-relative">
            <div class="swiper-pagination text-start"></div>
        </div>
    </div>
</div>