<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Print Voucher</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/print.css') }}" media="print">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/print.css') }}" media="screen">
    </head>
    <body>
    <section class="sec1">
        <strong>6 th Floor Clinic</strong>
        <div class="img">
            <img src="Capture-removebg-preview.png" alt="" width="300px"><br>
            <strong class="title_center">القيد المحاسبي</strong>
        </div>
        <strong>6 th Floor Clinic</strong>
    </section>
    <section class="sec2">
        <p>Voucher No
            <strong>0</strong>
        </p>
        <p>Date :
            <strong>{{ date('Y-m-d') }}</strong>
        </p>
    </section>
    <section class="sec3">
        <p>Being :</p>
        <table>
            <tr>
                <th>NO</th>
                <th>Code</th>
                <th>Account Name</th>
                <th>Debit</th>
                <th>Credit</th>
            </tr>

            @foreach($receipts as $receipt)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $receipt->account_code }}</td>
                    <td>{{ $receipt->account_name }}</td>
                    <td>{{ $receipt->debit }}</td>
                    <td>{{ $receipt->credit }}</td>
            @endforeach
        </table>
    </section>

    <script>
        window.print()
    </script>
</body>

</html>
