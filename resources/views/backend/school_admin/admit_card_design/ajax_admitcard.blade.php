<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #fff;
    }

    .modal-content {
        background-color: #fff;
        border-radius: 12px;
        overflow: hidden;
        width: 86%;
        margin: 0 auto;
    }

    .modal-header {
        background-color: #3e8e41;
        color: #fff;
        padding: 15px 30px;
        text-align: center;
    }

    .view-header {
        background-color: #3e8e41;
        color: #fff;
        padding: 10px;
        text-align: center;
        border-radius: 8px 8px 0 0;
    }

    .admit-container {
        background-color: #f5f5f5;
        border-radius: 8px;
        padding: 20px;
        margin: 20px;
        border: 1px solid #ddd;
    }

    .school-logo {
        width: 80px;
        height: 80px;
        object-fit: cover;
        margin-right: 20px;
    }

    .school-name {
        font-size: 24px;
        color: #333;
        margin-bottom: 5px;
    }

    .exam-title {
        font-size: 16px;
        color: #666;
        margin-bottom: 15px;
    }

    .admit-badge {
        display: inline-block;
        padding: 5px 20px;
        border: 1px solid #666;
        border-radius: 20px;
        text-transform: uppercase;
        font-size: 14px;
    }

    .student-info {
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
    }

    .info-group {
        flex-grow: 1;
    }

    .student-photo {
        width: 100px;
        height: 100px;
        border: 1px solid #000;
        padding: 2px;
    }

    .info-text {
        margin-bottom: 10px;
        font-size: 16px;
    }

    .print-button {
        background-color: #fff;
        color: #3e8e41;
        border: none;
        padding: 8px 16px;
        border-radius: 6px;
        cursor: pointer;
        font-weight: bold;
        margin-right: 10px;
    }

    @media print {
     body * {
        visibility: hidden; /* Hide all elements */
    }
    .modal-content, .modal-content * {
        visibility: visible; /* Show only the modal content */
    }
    .modal {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
    }
    .modal-header .btn, .modal-header h5 { 
        display: none; /* Hide buttons and modal header during print */
    }    
    }
</style>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg landscape-modal" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between align-items-center">
                <h4 class="modal-title">View Admit Card</h4>
                <div class="d-flex gap-2">
                    <button onclick="printAdmitCard()" class="print-button">
                        Print Admit Card
                    </button>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="admit-container">
                <div class="d-flex align-items-center justify-content-center mb-4">
                    <img src="data:image/png;base64,{{ $base64EncodedImageLeft }}" class="school-logo">
                    <div class="text-center">
                        <h1 class="school-name">{{ $admitCard->school->name ?? 'School Name Not Available' }}</h1>
                        <div class="exam-title">
                            {{ $examination->exam }}
                            <span>{{ $examination->academicSession->session ?? 'N/A' }}</span>
                        </div>
                        <div class="admit-badge">admit card</div>
                    </div>
                </div>

                <div class="student-info">
                    <div class="info-group">
                        @if ($admitCard->is_name == 1 && !empty($student->user->f_name))
                            <p class="info-text">Name Of Student : {{ $student->user->f_name }}</p>
                        @endif
                        
                        @if ($admitCard->is_name == 1 && !empty($student->user->father_name))
                            <p class="info-text">Father name : {{ $student->user->father_name }}</p>
                        @endif
                        
                        @if ($admitCard->is_gender == 1 && !empty($student->user->gender))
                            <p class="info-text">Gender: {{ $student->user->gender }}</p>
                        @endif
                    </div>
                    
                    <div>
                        <img src="data:image/png;base64,{{ $base64EncodedImageLeft }}" class="student-photo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function printAdmitCard() {
    const originalTitle = document.title;
    document.title = "Admit Card";
    window.print();
    document.title = originalTitle;
}
</script>