<!--
### LobbyKit Bladerunner View: views.parts.searchform
-->
<form role="search" action="/" method="GET">
    <div class="input-container"> <i class="fa fa-search"></i>
        <input name="s" type="search" placeholder="<?=isset($_REQUEST['s']) ? $_REQUEST['s'] : __('Search','intra')?>" value="{{ $_REQUEST['s'] }}">
        <div class="underline"></div>
    </div>
</form>
