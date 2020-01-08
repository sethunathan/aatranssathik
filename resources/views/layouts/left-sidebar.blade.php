<aside class="left-sidebar">
         
          
            <!--Sidebar navigation-->
            <nav class="sidebar-nav">
              
                <ul id="sidebarnav"> 
                    @admin('super')     
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">User Management</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/show')}}">Admins</a></li>
                        <li><a href="{{ url('admin/roles')}}">Roles</a></li>
                    </ul>
                    
                </li>
                
                @endadmin 
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-settings"></i>
                        <span class="hide-menu">Transactions</span></a>
                    <ul aria-expanded="false" class="collapse"> 
                        <li><a href="{{ url('admin/accounts')}}">Enquiry </a></li>   
                    </ul>
                </li>
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-settings"></i>
                            <span class="hide-menu">Master</span></a>
                        <ul aria-expanded="false" class="collapse"> 
                            <li><a href="{{ url('admin/accounts')}}">Accounts</a></li>   
                            <li><a href="{{ url('admin/place')}}">Place</a></li>
                            <li><a href="{{ url('admin/unit')}}">Unit</a></li>   
                            <li><a href="{{ url('admin/stockpoint')}}">Employee Details*- Later</a></li>
                            <li><a href="{{ url('admin/stockpoint')}}">Vehicle Details* Later</a></li>
                             
                            <li><a href="{{ url('admin/companies')}}">Our Company</a></li>   
                            
                        </ul>
                    </li>
                    
                     
                     
                   
                    
 
                    
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <!-- Bottom points-->
        <div class="sidebar-footer">
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
        </div>
        <!-- End Bottom points-->
    </aside>