 <!-- ========== Left Sidebar Start ========== -->
 <div class="leftside-menu leftside-menu-detached">

     <div class="leftbar-user">
         <a href="javascript: void(0);">
             <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user-image" height="42"
                 class="rounded-circle shadow-sm">
             <span class="leftbar-user-name">Soeng Souy</span>
         </a>
     </div>

     <!--- Sidemenu -->
     <ul class="side-nav">

         <li class="side-nav-title side-nav-item">Navigation</li>

         <li class="side-nav-item">
             <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
                 aria-controls="sidebarDashboards" class="side-nav-link">
                 <i class="uil-home-alt"></i>
                 <span class="badge bg-success float-end">4</span>
                 <span> Boshqaruv paneli </span>
             </a>

         </li>


         {{-- <li class="side-nav-title side-nav-item">Apps</li> --}}

         <li class="side-nav-item">
             <a href="{{ route('category.index') }}" class="side-nav-link">
                 <i class="uil-calender"></i>
                 <span> Kataloglar </span>
             </a>
         </li>

         {{-- <li class="side-nav-item">
             <a href="apps-chat.html" class="side-nav-link">
                 <i class="uil-comments-alt"></i>
                 <span> Chat </span>
             </a>
         </li>

         <li class="side-nav-item">
             <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                 aria-controls="sidebarEcommerce" class="side-nav-link">
                 <i class="uil-store"></i>
                 <span> Ecommerce </span>
                 <span class="menu-arrow"></span>
             </a>
             <div class="collapse" id="sidebarEcommerce">
                 <ul class="side-nav-second-level">
                     <li>
                         <a href="apps-ecommerce-products.html">Products</a>
                     </li>
                     <li>
                         <a href="apps-ecommerce-products-details.html">Products Details</a>
                     </li>
                     <li>
                         <a href="apps-ecommerce-orders.html">Orders</a>
                     </li>
                     <li>
                         <a href="apps-ecommerce-orders-details.html">Order Details</a>
                     </li>
                     <li>
                         <a href="apps-ecommerce-customers.html">Customers</a>
                     </li>
                     <li>
                         <a href="apps-ecommerce-shopping-cart.html">Shopping Cart</a>
                     </li>
                     <li>
                         <a href="apps-ecommerce-checkout.html">Checkout</a>
                     </li>
                     <li>
                         <a href="apps-ecommerce-sellers.html">Sellers</a>
                     </li>
                 </ul>
             </div>
         </li> --}}




     </ul>

     <!-- Help Box -->
     <div class="help-box help-box-light text-center">
         <a href="javascript: void(0);" class="float-end close-btn text-body">
             <i class="mdi mdi-close"></i>
         </a>
         <img src="{{ asset('assets/images/help-icon.svg') }}" height="90" alt="Helper Icon Image">
         <h5 class="mt-3">Unlimited Access</h5>
         <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
         <a href="javascript: void(0);" class="btn btn-outline-primary btn-sm">Upgrade</a>
     </div>
     <!-- end Help Box -->
     <!-- End Sidebar -->

     <div class="clearfix"></div>
     <!-- Sidebar -left -->

 </div>
 <!-- Left Sidebar End -->
