<footer class="main-footer text-center">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
            <li class="nav-item">
                <!-- <a class="nav-link" href="<?= base_url('assets/') ?>javascript:void(0)"></a> -->
            </li>
        </ul>
    </div>
    <a style="color: blue;">Kursus Bahasa Inggris SMAN 1 Pangean 2024 </a>
</footer>

<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- Vendor JS -->
<script src="<?= base_url('assets/') ?>main/js/vendors.min.js"></script>
<script src="<?= base_url('assets/') ?>main/js/pages/chat-popup.js"></script>
<script src="<?= base_url('assets/') ?>assets/icons/feather-icons/feather.min.js"></script>

<script src="<?= base_url('assets/') ?>assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
<script src="<?= base_url('assets/') ?>assets/vendor_components/moment/min/moment.min.js"></script>
<script src="<?= base_url('assets/') ?>assets/vendor_components/fullcalendar/fullcalendar.js"></script>

<!-- EduAdmin App -->
<script src="<?= base_url('assets/') ?>main/js/template.js"></script>
<script src="<?= base_url('assets/') ?>main/js/pages/dashboard3.js"></script>
<script src="<?= base_url('assets/') ?>main/js/pages/calendar.js"></script>

<!-- data table -->
<script src="<?= base_url('assets/') ?>main/js/pages/data-table.js"></script>
<script src="<?= base_url('assets/') ?>assets/vendor_components/datatable/datatables.min.js"></script>

<script src="<?= base_url('assets/') ?>assets/vendor_components/ckeditor/ckeditor.js"></script>
<!-- <script src="<?= base_url('assets/') ?>assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script> -->
<script src="<?= base_url('assets/') ?>main/js/pages/editor.js"></script>

<!-- Chart -->
<script src="<?= base_url('assets/') ?>assets/vendor_components/chart.js-master/Chart.min.js"></script>
<script src="<?= base_url('assets/') ?>main/js/pages/widget-charts2.js"></script>

<script type="text/javascript">
    if (document.getElementById('chartJenis')) {
        var ctx6 = document.getElementById("chartJenis").getContext("2d");
        var data6 = {
            labels: ["Laki-laki", "Perempuan"],
            datasets: [{
                data: [<?= $laki ?>, <?= $perempuan ?>],
                backgroundColor: ["#689f38", "#38649f"],
                hoverBackgroundColor: ["#33691e", "#244674"]
            }]
        };

        var pieChart = new Chart(ctx6, {
            type: 'pie',
            data: data6,
            options: {
                animation: {
                    duration: 3000
                },
                responsive: true,
                legend: {
                    labels: {
                        fontFamily: "Nunito Sans",
                        fontColor: "#878787"
                    }
                },
                tooltips: {
                    backgroundColor: 'rgba(33,33,33,1)',
                    cornerRadius: 0,
                    footerFontFamily: "'Nunito Sans'"
                },
                elements: {
                    arc: {
                        borderWidth: 0
                    }
                }
            }
        });
    }
</script>

</body>

</html>