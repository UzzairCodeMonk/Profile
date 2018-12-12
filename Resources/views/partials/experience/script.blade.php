<script type="text/javascript">
    $(document).ready(function () {
        var counter = 2;

        $("#addrow").on("click", function () {
            var newRow = $("<tr>");
            var cols = "";
            cols += '<td>' + counter + '</td>';
            cols += '<td><input type="text" class="form-control" name="company[]" /></td>';
            cols += '<td><input type="text" class="form-control" name="position[]" /></td>';
            cols += '<td><input type="text" class="form-control" name="start_year[]" /></td>';
            cols += '<td><input type="text" class="form-control" name="end_year[]" /></td>';
            cols +=
                '<td><input type="button" class="ibtnDel btn btn-block btn-danger " value="Remove"></td>';
            newRow.append(cols);
            $("table.dynamic-list").append(newRow);
            counter++;
        });

        $("table.dynamic-list").on("click", ".ibtnDel", function (event) {
            $(this).closest("tr").remove();
            counter -= 1
        });
    });

</script>