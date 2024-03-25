<% require themedCSS('_standings-element') %>
<div class="section standings">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>$Title</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-end">PLATZ</th>
                            <th></th>
                            <th>VEREIN</th>
                            <th class="text-center">AB</th>
                            <th class="text-center">S</th>
                            <th class="text-center">U</th>
                            <th class="text-center">N</th>
                            <th class="text-center">GP</th>
                            <th class="text-center">SP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <% loop $Standings %>
                            <tr>
                                <td class="text-end">$Pos</td>
                                <td class="text-center">
                                    <img src="$Team.Logo.URL" />
                                </td>
                                <td>$Team.Name</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0:0</td>
                                <td class="text-center">0.0000</td>
                            </tr>
                        <% end_loop %>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
