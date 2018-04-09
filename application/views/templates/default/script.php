<script src="<?php echo BASE_PATH; ?>/default/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo BASE_PATH; ?>/default/bootstrap/js/bootstrap.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="<?php echo BASE_PATH; ?>/default/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="<?php echo BASE_PATH; ?>/default/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?php echo BASE_PATH; ?>/default/dist/js/app.min.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo BASE_PATH; ?>/default/dist/js/demo.js" type="text/javascript"></script>
<!-- Plug-in Script -->
<script src="<?php echo BASE_PATH; ?>/default/plugins/select2/select2.full.min.js" type="text/javascript"></script>
<script src="<?php echo BASE_PATH; ?>/default/plugins/timepicker/bootstrap-timepicker.js" type="text/javascript"></script>
<script src="<?php echo BASE_PATH; ?>/default/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- JSPDF to create PDF on the fly at client -->
<script src="<?php echo BASE_PATH; ?>/default/dist/js/jspdf_autotable/jspdf.min.js" type="text/javascript"></script>
<script src="<?php echo BASE_PATH; ?>/default/dist/js/jspdf_autotable/jspdf.plugin.autotable.src.js" type="text/javascript"></script>
<!--Customize Script -->
<script type="text/javascript">
    $(function(){
        $('#tglperiksa').datepicker({
            format:'dd-mm-yyyy',
            defaultDate:Date.now
        });
        $('#rpttglperiksa').datepicker({
            format:'dd-mm-yyyy',
            defaultDate:Date.now
        });
        $('#jam').timepicker();
        $('#btnExport').click(function(){            
            var doc = new jsPDF('p', 'pt');
            var totalPagesExp = "{total_pages_count_string}";
            var elem = document.getElementById("tbhasil");
            var res = doc.autoTableHtmlToJson(elem);
            
            var pageWidth = doc.internal.pageSize.width;
            
            doc.setFontSize(22);
            var xOffset = (doc.internal.pageSize.width / 2) - (doc.getStringUnitWidth(rptheader) * doc.internal.getFontSize() / 2)
            doc.text(rptheader, xOffset, 50);
            
            doc.setLineWidth(2);
            doc.line(20, 60, (doc.internal.pageSize.width - 20), 60); // horizontal line(x1,y1,x2,y2)
            doc.setLineWidth(0.8);
            doc.line(20, 62, (doc.internal.pageSize.width - 20), 62); // horizontal line(x1,y1,x2,y2)
            
            doc.setFontSize(12);
            var mthName = ["Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember"];
            var strToday =  d.getDate().toString() + " " + mthName[d.getMonth()] + " " + d.getFullYear().toString();
            var tglText = "Tanggal: " + strToday;
            var xOffset2 = (doc.internal.pageSize.width / 2) - (doc.getStringUnitWidth(tglText) * doc.internal.getFontSize() / 2)
            doc.text(tglText, xOffset2, 75);
            
            var pageContent = function (data) {
                // FOOTER
                var str = "Halaman Ke-" + data.pageCount;
                // Total page number plugin only available in jspdf v1.0+
                if (typeof doc.putTotalPages === 'function') {
                    str = str + " dari " + totalPagesExp;
                }
                doc.setFontSize(8);
                doc.text(str, data.settings.margin.left, doc.internal.pageSize.height - 30);
            };
            
            doc.setFontSize(10);            
            doc.autoTable(res.columns, res.data, {startY: 90, theme:'grid', addPageContent: pageContent, overflow:'linebreak'});
            
            // Total page number plugin only available in jspdf v1.0+
            if (typeof doc.putTotalPages === 'function') {
                doc.putTotalPages(totalPagesExp);
            }
            
            doc.save(pdfName);
        });
    });
    
</script>