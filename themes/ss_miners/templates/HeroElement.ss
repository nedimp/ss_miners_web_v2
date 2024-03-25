<% require themedJavascript('_hero-element') %>
<% require themedCSS('_hero-element') %>

<body>
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

    <div class="nav-bar">
        <% loop $Images %>
            <div class="nav-bar-item" id="nav-bar-item-$Pos"></div>
        <% end_loop %>
    </div>
</div>

<script>
    var images = document.querySelectorAll('.header-container');
    var navBarItems = document.querySelectorAll('.nav-bar-item');

    // Initialize the index of the currently visible image
    var currentIndex = 0;

    // Set the initial state of the navigation bar items
    navBarItems[currentIndex].style.backgroundColor = 'white';
    navBarItems[(currentIndex + 1) % navBarItems.length].style.backgroundColor = 'black';

    // Create an intersection observer
    var observer = new IntersectionObserver(function(entries) {
        // Loop through the entries
        entries.forEach(function(entry) {
            // Get the index of the currently observed image
            var index = Array.prototype.indexOf.call(images, entry.target);

            // If the element is in the viewport
            if (entry.isIntersecting) {
                // Change the background color of the navigation bar items based on the index
                navBarItems[currentIndex].style.backgroundColor = 'black'; // Set the current item to black
                currentIndex = index; // Update the current index
                navBarItems[currentIndex].style.backgroundColor = 'white'; // Set the new current item to white
            }
        });
    }, { threshold: 0.5 }); // Trigger when at least 50% of the image is visible

    // Observe each image
    images.forEach(function(image) {
        observer.observe(image);
    });
</script>
</body>