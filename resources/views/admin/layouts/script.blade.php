 <!-- General JS Scripts -->
 <script src="{{ asset('admin/assets/modules/jquery.min.js') }}"></script>
 <script src="{{ asset('admin/assets/modules/popper.js') }}"></script>
 <script src="{{ asset('admin/assets/modules/tooltip.js') }}"></script>
 <script src="{{ asset('admin/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('admin/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
 <script src="{{ asset('admin/assets/modules/moment.min.js') }}"></script>
 <script src="{{ asset('admin/assets/js/stisla.js') }}"></script>
 
 <!-- JS Libraies -->
 <script src="{{ asset('admin/assets/modules/jquery.sparkline.min.js') }}"></script>
 <script src="{{ asset('admin/assets/modules/chart.min.js') }}"></script>
 <script src="{{ asset('admin/assets/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('admin/assets/modules/summernote/summernote-bs4.js') }}"></script>
 <script src="{{ asset('admin/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

 <!-- Page Specific JS File -->
 <script src="{{ asset('admin/assets/js/page/index.js') }}"></script>
 <script src="{{ asset('admin/assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>

 <!-- Template JS File -->
 <script src="{{ asset('admin/assets/js/scripts.js') }}"></script>
 <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
 <script>
    $.uploadPreview({
    input_field: "#image-upload",   // Default: .image-upload
    preview_box: "#image-preview",  // Default: .image-preview
    label_field: "#image-label",    // Default: .image-label
    label_default: "Choose File",   // Default: Choose File
    label_selected: "Change File",  // Default: Change File
    no_label: false,                // Default: false
    success_callback: null          // Default: null
    });
 </script>
 @stack('scripts')