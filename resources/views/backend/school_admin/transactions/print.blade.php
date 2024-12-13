<!DOCTYPE html>
<html>
<head>
    <title>Voucher</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .contact-info {
            text-align: center;
            margin-bottom: 15px;
            color: #666;
        }
        .voucher-details {
            margin: 20px 0;
        }
        .transaction-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .transaction-table th,
        .transaction-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: right;
        }
        .transaction-table th {
            background-color: #f5f5f5;
        }
        .footer-section {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
            padding: 20px 50px;
        }
        .signature-line {
            border-top: 1px solid #000;
            width: 200px;
            text-align: center;
            padding-top: 5px;
        }
        .print-button {
            text-align: center;
            margin-top: 20px;
        }
        .print-button button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        @media print {
            .print-button {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>{{ $transaction->createdBy->f_name ?? 'N/A'}}</h2>
        <div class="contact-info">
            {{ $schoolInfo->address ?? $schoolInfo['address'] }}<br>
            Phone: {{ $schoolInfo->phone ?? $schoolInfo['phone'] }} | Email: {{ $schoolInfo->email ?? $schoolInfo['email'] }}
        </div>
        <h3>{{ $transaction->voucherType->name }} Voucher #{{ $transaction->voucher_no }}</h3>
    </div>

    <table class="transaction-table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Account</th>
                <th>Debit (DR)</th>
                <th>Credit (CR)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaction->transactionDetails as $detail)
                <tr>
                    <td>{{ $detail->transaction->transaction_date_nepali }}</td>
                    <td>{{ $detail->account->name }}</td>
                    <td>{{ number_format($detail->debit, 2) }}</td>
                    <td>{{ number_format($detail->credit, 2) }}</td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td style="text-align: left;" colspan="2"><strong>Description:</strong> {{ $transaction->description }}</td>
                <td></td>
            </tr>
            <tr>
                <th>Total</th>
                <th colspan="1">{{ number_format($totalDebit, 2) }}</th>
                <th colspan="2">{{ number_format($totalCredit, 2) }}</th>
            </tr>
        </tbody>
    </table>    
    
    <div class="print-button">
        <button onclick="window.print()">Print Voucher</button>
    </div>
</body>
</html>