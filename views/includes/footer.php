<footer class="footer">
        <div class="container">
            <p class="text-center">Powered By Design Space | All Rights Reserved &copy; <?php echo date('Y')?></p>
            &nbsp;<br>
      </div>
    </footer>
<!-- common libraries. required for every page-->
<script src="<?php echo base_url('assets/lib/jquery/dist/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/lib/jquery-pjax/jquery.pjax.js')?>"></script>
<script src="<?php echo base_url('assets/lib/bootstrap-sass/assets/javascripts/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/lib/widgster/widgster.js')?>"></script>
<script src="<?php echo base_url('assets/lib/underscore/underscore.js')?>"></script>

<!-- common application js 
<script src="<?php echo base_url('assets/js/app.js')?>"></script>-->
<script src="<?php echo base_url('assets/js/settings.js')?>"></script>

<!-- common templates -->
<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Light Version</div>
        <div>
            <a href="../light/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <div class="setting clearfix">
        <div>White Version</div>
        <div>
            <a href="../white/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Auto</button>
    <% } %>
</script>

    