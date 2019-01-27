         @extends('MasterPage/master')
         @section('content')  

           <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>World</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="Vector-map-js">
                                <div id="vmap" class="vmap"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>

                @endsection