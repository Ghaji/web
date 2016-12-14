<!DOCTYPE html>

<html>

<head>

    <title>Laravel Dependent Dropdown Example with demo</title>

    <script src="{{ asset('../resources/assets/js/jquery-1.11.2.min.js') }}"></script>

    <!-- <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css"> -->
    <head><meta name="csrf-token" content="{!! csrf_token() !!}"></head>
</head>

<body>


<div class="container">

    <div class="panel panel-default">

      <div class="panel-heading">Select Faculty and get below Related departments</div>

      <div class="panel-body">

            <div class="form-group">

                <label for="title">Select Faculty:</label>

                <select name="faculty" class="form-control" style="width:350px">

                    <option value="">--- Select Faculty ---</option>

                    @foreach ($faculties as $key => $value)

                        <option value="{{ $key }}">{{ $value }}</option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">

                <label for="title">Select Department:</label>

                <!-- <select name="departments" class="form-control" style="width:350px">

                </select> -->

                <select name="departments" class="form-control" style="width:350px">
                    <option value="">--select--</option>
                    <!-- if(!empty($departments))

                        foreach ($departments as $key => $value)
                            <option value="{ /{ $key }}">{ /{ $value }}</option>
                        endforeach

                    endif -->
                </select>

            </div>

      </div>

    </div>

</div>


<script type="text/javascript">

    $(document).ready(function() {

        $('select[name="faculty"]').on('change', function() {

            var facultyID = $(this).val();

            // alert(facultyID);

            if(facultyID) {
                $.ajax({
                    url: '{{ url("/myform/ajax") }}/'+facultyID,
                    type: "GET",
                    dataType: "json",
                    success:function(data)
                    {
                        $('select[name="departments"]').empty();

                        $.each(data, function(key, value) {
                            $('select[name="departments"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }

                });

            }else{
                
                $('select[name="departments"]').empty();
            }

        });

    });

</script>


</body>

</html>