                </div>
                <br>
            </div>
        </div>

        <!-- Mainly scripts -->
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Custom and plugin javascript -->
        <script src="js/inspinia.js"></script>
        <script src="js/plugins/pace/pace.min.js"></script>
        <script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
        <script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script>
        <script src='https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js'></script>
        <script src='https://cdn.datatables.net/responsive/2.1.0/js/responsive.bootstrap.min.js'></script>
        <script src="js/blog-admin.js"></script>
        <script src="js/summernote.js"></script>

        <!-- Drag and Drop -->
        <script src="js/jquery-ui-1.10.4.min.js"></script>
        <script src="js/jquery-ui.custom.min.js"></script>
        <script type="text/javascript">
            // confirmacao remocao
            $(".btnremover").click(function(){
                var link = $(this).attr("href");
                $('.confirmaexclusao').modal('show');
                $("#btnconexclusao").attr('href', link);
                return false;
            });
            // drag and drop
            $('#list').sortable({
                update: function(event, ui){
                    var id_array = new Array();
                    $('#list tr').each(function(){
                        id_array.push($(this).attr("id"));
                    });
                    $.ajax({
                        url:"includes/update.php",
                        method:"POST",
                        data:{id_array:id_array}
                   });  
                }
            });
            $(document).ready(function() {
                $('#summernote').summernote({
                  height: 400,                 // set editor height
                  minHeight: 400,             // set minimum height of editor
                  maxHeight: 400,   
                  toolbar: [
                    // [groupName, [list of button]]
                    // ['style', ['bold', 'italic', 'underline', 'clear']],
                    // ['fontsize', ['fontsize']],
                    // ['color', ['color']],
                    // ['para', ['ul', 'ol', 'paragraph']],
                    // ['insert', ['link', 'video']]
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video', 'hr']]
                  ],
                  popover: {
                    air: [
                    ]
                  },
                  disableDragAndDrop: true,
                  shortcuts: false
                });
                $('#summernote2').summernote({
                  height: 400,                 // set editor height
                  minHeight: 400,             // set minimum height of editor
                  maxHeight: 400,   
                  toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']]
                  ],
                  popover: {
                    air: [
                    ]
                  },
                  disableDragAndDrop: true,
                  shortcuts: false
                });
            });
            $('#idioma').change(function(){
                if ($(this).val()=='pt'){
                    $('.en').hide();
                    $('.pt').show();
                }else{
                    $('.pt').hide();
                    $('.en').show();
                }
            });
        </script>
        <!-- End of Drag and Drop -->
    </body>
</html>