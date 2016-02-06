<div class="col-xs-12">
    <div class="card" data-exclude="xs">
        <div class="card-header card-header-sm bordered">
            <div class="header-block">
                <h3 class="title">{{ get_the_title() }}</h3> 
            </div>
            <ul class="nav nav-tabs pull-right" role="tablist">
                <li class="nav-item"> <a class="nav-link active" href="#visits" role="tab" data-toggle="tab">Visits</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#downloads" role="tab" data-toggle="tab">Downloads</a> </li>
            </ul>
        </div>
        <div class="card-block">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active fade in" id="visits">
                    <p class="title-description"> Number of unique visits last 30 days </p>
                    <div id="dashboard-visits-chart"></div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="downloads">
                    <p class="title-description"> Number of downloads last 30 days </p>
                    <div id="dashboard-downloads-chart"></div>
                </div>
            </div>
        </div>
    </div>
</div>