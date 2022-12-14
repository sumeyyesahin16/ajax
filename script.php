<!-- Internal Js -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



<script>


    $('#dates').daterangepicker({
        arrows:true,
        dateFormat: 'd-M-yy',
        rangeSplitter: 'to',
        datepickerOptions: {
            changeMonth: true,
            changeYear: true,
            minDate: new Date("01/01/2017") //Account created date
        },
        closeOnSelect: true,
        onChange: function(){
            //ajax call goes here
            $("#dates").change(function(){});
        }
    });


  <!--SCROLL UP-->
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            } });
        $('.scrollup').click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 100);
            return false;
        });
    });


<!--SEARCH FILTER-->
    function filterGlobal() {
        $('#example')
            .DataTable()
            .search($('#global_filter').val(), $('#global_regex').prop('checked'), $('#global_smart').prop('checked'))
            .draw();
    }


    function filterColumn(i) {
        $('#example')
            .DataTable()
            .column(i)
            .search(
                $('#col' + i + '_filter').val(),
                $('#col' + i + '_regex').prop('checked'),
                $('#col' + i + '_smart').prop('checked')
            )
            .draw();
    }


    $(document).ready(function () {
        $('#example').DataTable();

        $('input.global_filter').on('keyup click', function () {
            filterGlobal();
        });

        $('input.column_filter').on('keyup click', function () {
            filterColumn($(this).parents('tr').attr('data-column'));
        });
    });


<!--DATATABLE WITH TURKISH-->
    $('#example').DataTable({
        language: {
            info: "_TOTAL_ kay??ttan _START_ - _END_ kay??t g??steriliyor.",
            infoEmpty:      "G??sterilecek hi?? kay??t yok.",
            loadingRecords: "Kay??tlar y??kleniyor.",
            lengthMenu: "Sayfada _MENU_ kay??t g??ster.",
            zeroRecords: "Tablo bo??",
            search: "Arama:",
            infoFiltered:   "(toplam _MAX_ kay??ttan filtrelenenler)",
            buttons: {
                copyTitle: "Panoya kopyaland??.",
                copySuccess:"Panoya %d sat??r kopyaland??",
                copy: "Kopyala",
                print: "Yazd??r",
            },

            paginate: {
                first: "??lk",
                previous: "??nceki",
                next: "Sonraki",
                last: "Son"
            },
        }
    });





</script>

