@extends('backend.layouts.master')
@section('content')
<style>
    .container-fluid {
        padding-left: 0;
        padding-right: 0;
    }
    #table-container {
        width: 100%;
        overflow-x: auto;
    }
    #buttons-container {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }
    #buttons-container .dt-buttons {
        display: flex;
        flex-direction: row;
    }
    #buttons-container .dt-buttons button {
        margin-right: 5px;
    }
    .dataTables_wrapper .dataTables_filter {
        float: right;
        text-align: right;
    }
    #attendanceTable {
        width: 100% !important;
    }
</style>
<div class="container-fluid">
    <h1>Attendance Report</h1>
    <form action="{{ route('admin.school_attendance_reports.report') }}" method="GET">
        <div class="row align-items-end">
            <div class="col-lg-3 col-sm-3 mt-2">
                <div class="p-2 label-input">
                    <label for="nepali-datepicker">Date:</label>
                    <div class="form-group">
                        <div class="input-group date" id="admission-datetimepicker" data-target-input="nearest">
                            <input id="nepali-datepicker" name="date" type="text" class="form-control datetimepicker-input" />
                        </div>
                        @error('date')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                <div class="form-group">
                    <label for="class_id">Class:</label>
                    <select name="class_id" id="class_id" class="form-control" required>
                        <option value="">Select Class</option>
                        @foreach($classes as $class)
                            <option value="{{ $class->id }}" {{ (request('class_id') == $class->id) ? 'selected' : '' }}
                                data-sections='@json($class->sections)'>
                                {{ $class->class }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                <div class="form-group">
                    <label for="section_id">Section:</label>
                    <select name="section_id" id="section_id" class="form-control" required>
                        <option value="">Select Section</option>
                    </select>
                </div>
            </div>
                             
            <div class="col-lg-3 col-sm-3 mt-2">
                <div class="search-button-container d-flex align-items-end">
                    <button type="submit" class="btn btn-sm btn-primary">Search</button>
                </div>
            </div>
        </div>
    </form>
    
    <div id="table-container" class="mt-4">
        <div id="buttons-container"></div>
        <table id="attendanceTable" class="table table-striped table-bordered w-100">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Attendance Type</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data will be populated by DataTables -->
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        // Initialize nepali-datepicker
        $('#nepali-datepicker').nepaliDatePicker({
            dateFormat: 'YYYY-MM-DD',
            closeOnDateSelect: true
        });
    
        var currentDate = NepaliFunctions.GetCurrentBsDate();
        var padZero = function (num) {
            return num < 10 ? '0' + num : num;
        };
        var formattedDate = currentDate.year + '-' + padZero(currentDate.month) + '-' + padZero(currentDate.day);
        $('#nepali-datepicker').val(formattedDate);
    
        var table = $('#attendanceTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route("admin.school_attendance_reports.data") }}',
                type: 'GET',
                data: function (d) {
                    d.date = $('#nepali-datepicker').val();
                    d.class_id = $('#class_id').val();
                    d.section_id = $('#section_id').val();
                }
            },
            columns: [
                { data: 'student_name', name: 'student_name' },
                { data: 'attendance_type', name: 'attendance_type' }
            ],
            dom: '<"d-flex justify-content-between"lfB>rtip',
            buttons: {
                dom: {
                    button: {
                        className: 'btn btn-sm btn-primary'
                    }
                },
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                container: '#buttons-container'
            },
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
            ordering: false,
            language: {
                emptyTable: "No matching records found"
            }
        });

        function updateSections() {
            var selectedOption = $('#class_id option:selected');
            var sections = selectedOption.data('sections');
            var sectionSelect = $('#section_id');
            
            sectionSelect.empty().append('<option value="">Select Section</option>');
            
            if (sections) {
                sections.forEach(function(section) {
                    sectionSelect.append($('<option>', {
                        value: section.id,
                        text: section.section_name
                    }));
                });
            }
        }

        $('#class_id').on('change', function() {
            updateSections();
        });

        updateSections();
    
        $('form').on('submit', function(e) {
            e.preventDefault();
            var classId = $('#class_id').val();
            var sectionId = $('#section_id').val();
            var date = $('#nepali-datepicker').val();
            if (classId && sectionId && date) {
                $('#table-container').show();
                table.ajax.reload();
            } else {
                $('#table-container').hide();
                alert('Please select Class, Section, and Date to view the report.');
            }
        });
    });
</script>

@endsection