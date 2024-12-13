<div class="table-responsive">
    <button id="exportCsv" type="button" class="btn btn-sm btn-primary mt-2 ml-2">Export</button>
    <table class="table table-striped" id="subjectTable">
        <thead>
            <tr>
                <th>Admission no.</th>
                <th>Roll No</th>
                <th>Student Name</th>
                <th>Attendance</th>
                <th>Participant Assessment</th>
                <th>Practical Assessment</th>
                <th>Theory Assessment</th>
                <th>Notes</th>
            </tr>
        </thead>
        <tbody>
            @foreach($studentsMarks as $index => $mark)
                <tr>
                    <td>{{ $mark->studentSession->student->admission_no }}</td>
                    <td>{{ $mark->studentSession->student->roll_no ?? 'N/A' }}</td>
                    <td>{{ $mark->studentSession->student->user->full_name }}</td>
                    <td>
                        <input type="hidden" 
                               name="attendance[{{ $index }}]" 
                               value="1"> {{-- Default to present --}}
                        <input type="checkbox" 
                               class="edit_attendance_chk" 
                               name="attendance_check[{{ $index }}]" 
                               value="0"
                               {{ ($mark->attendance ?? 1) == 0 ? 'checked' : '' }}>
                        <input type="hidden" 
                               name="student_session_id[{{ $index }}]" 
                               value="{{ $mark->student_session_id ?? '' }}">
                    </td>
                    <td>
                        <input type="number" 
                               class="form-control edit_participant_assessment" 
                               name="participant_assessment[{{ $index }}]" 
                               value="{{ $mark->participant_assessment ?? 0 }}">
                    </td>
                    <td>
                        <input type="number" 
                               class="form-control edit_practical_assessment" 
                               name="practical_assessment[{{ $index }}]" 
                               value="{{ $mark->practical_assessment ?? 0 }}">
                    </td>
                    <td>
                        <input type="number" 
                               class="form-control edit_theory_assessment" 
                               name="theory_assessment[{{ $index }}]}" 
                               value="{{ $mark->theory_assessment ?? 0 }}">
                    </td>
                    <td>
                        <input type="text" 
                               class="form-control" 
                               name="notes[{{ $index }}]}" 
                               value="{{ $mark->notes ?? '' }}">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary">Update Marks</button>
    </div>
</div>
<script>
    // CSV Export Function
    function downloadCSV(csv, filename) {
        var csvFile = new Blob([csv], { type: 'text/csv' });
        var downloadLink = document.createElement("a");
        downloadLink.download = filename;
        downloadLink.href = window.URL.createObjectURL(csvFile);
        downloadLink.style.display = "none";
        document.body.appendChild(downloadLink);
        downloadLink.click();
    }

    function exportTableToCSV(filename) {
        var csv = [];
        var table = document.getElementById("subjectTable");
        var rows = table.querySelectorAll("tr");

        // Loop through each row
        for (var i = 0; i < rows.length; i++) {
            var row = rows[i];
            var cols = row.querySelectorAll("td, th");
            var csvRow = [];

            // Loop through each column
            for (var j = 0; j < cols.length; j++) {
                csvRow.push('"' + cols[j].innerText.replace(/"/g, '""') + '"');
            }

            csv.push(csvRow.join(","));
        }

        // Download CSV
        downloadCSV(csv.join("\n"), filename);
    }

    // Event listener for the export button
    $("#exportCsv").on("click", function() {
        exportTableToCSV('subject_marks.csv');
    });
</script>
