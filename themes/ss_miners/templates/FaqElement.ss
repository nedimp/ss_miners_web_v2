<% require themedJavascript('_faq-element') %>
<% require themedCSS('_faq-element') %>
<div class="section faq">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>$Title</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img class="w-75"  src="$Image.URL" />
                <h3>$Subtitle</h3>
                <p>$Details</p>
                <div class="button inverted">$ReadMoreLabel</div>
            </div>
            <div class="col-6">
                <div class="accordion" id="faq-$ID">
                    <% loop $Questions %>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-$Up.ID-$ID">
                                    $Question
                                </button>
                            </div>
                            <div id="faq-$Up.ID-$ID" class="accordion-collapse collapse" data-bs-parent="#faq-$Up.ID">
                                <div class="accordion-body">
                                    $Answer
                                </div>
                            </div>
                        </div>
                    <% end_loop %>
                </div>
            </div>
        </div>
    </div>
</div>
