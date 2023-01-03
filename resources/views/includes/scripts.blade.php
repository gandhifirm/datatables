{{-- required javascripts --}}
<script src="{{ asset('scripts/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('scripts/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('scripts/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('scripts/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

{{-- theme app --}}
<script src="{{ asset('scripts/js/adminlte.min.js') }}"></script>

{{-- datatables --}}
<script src="{{ url('https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('scripts/plugins/DataTables/datatables.min.js') }}"></script>

{{-- plugins --}}
<script src="{{ asset('scripts/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('scripts/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('scripts/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>

{{-- custom scripts --}}
<script src="{{ asset('scripts/js/pages/dashboard2.js') }}"></script>

{{-- addon scripts --}}
@stack('addon-scripts')
