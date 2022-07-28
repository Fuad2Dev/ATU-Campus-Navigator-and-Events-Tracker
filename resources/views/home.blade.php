<x-layout>
    <!-- Tabs navs -->
    <ul class="nav nav-tabs mb-3 justify-content-around" id="ex-with-icons" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active position-relative" id="ex-with-icons-tab-1" data-mdb-toggle="tab"
                href="#ex-with-icons-tabs-1" role="tab" aria-controls="ex-with-icons-tabs-1" aria-selected="true">
                <i class="fas fa-users">
                    
                </i>
                <span class="position-absolute top-10 start-100 translate-middle badge rounded-pill bg-danger">
                    99+
                </span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex-with-icons-tab-2" data-mdb-toggle="tab" href="#ex-with-icons-tabs-2"
                role="tab" aria-controls="ex-with-icons-tabs-2" aria-selected="false"><i
                    class="fas fa-rss"></i></a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link position-relative" id="ex-with-icons-tab-3" data-mdb-toggle="tab" href="#ex-with-icons-tabs-3"
                role="tab" aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i
                    class="fas fa-bell"></i>
                    <span class="position-absolute top-10 start-100 translate-middle badge rounded-pill bg-danger">
                        99+
                    </span>
                </a>
        </li>
    </ul>
    <!-- Tabs navs -->

    <!-- Tabs content -->
    <div class="tab-content" id="ex-with-icons-content">
        <div class="tab-pane fade show active" id="ex-with-icons-tabs-1" role="tabpanel"
            aria-labelledby="ex-with-icons-tab-1">
            Tab 1 content
        </div>
        <div class="tab-pane fade" id="ex-with-icons-tabs-2" role="tabpanel" aria-labelledby="ex-with-icons-tab-2">
            Tab 2 content
        </div>
        <div class="tab-pane fade" id="ex-with-icons-tabs-3" role="tabpanel" aria-labelledby="ex-with-icons-tab-3">
            Tab 3 content
        </div>
    </div>
    <!-- Tabs content -->
</x-layout>
