<!DOCTYPE html>
<html>
    <head>
        <title>{{ config('app.name') }} | Contact Query</title>
        <style>
            table {
                border-collapse: separate;
                border-spacing: 0;
                color: #4a4a4d;
                font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
            }
            th, td {
                padding: 10px 15px;
                vertical-align: middle;
            }
            thead {
                background: #395870;
                color: #fff;
            }
            th {
                font-weight: bold;
            }
            th:first-child {
                text-align: left;
            }
            tbody tr:nth-child(even) {
                background: #f0f0f2;
            }
            td {
                border-bottom: 1px solid #cecfd5;
                border-right: 1px solid #cecfd5;
                border-left: 1px solid #cecfd5;
            }
            td:first-child {
                border-left: 1px solid #cecfd5;
            }
            .book-title {
                color: #395870;
                display: block;
            }
            .item-stock,.item-qty {
                text-align: center;
            }
            .item-price {
                text-align: left;
            }
            .item-multiple {
                display: block;
            }
            tfoot {
                text-align: right;
            }
            tfoot tr:last-child {
                background: #f0f0f2;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th scope="col" colspan="2" style="background: #1e4454;">{{ config('app.name') }} - Contact Query Received.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong class="book-title">Contact ID</strong></td>
                    <td class="item-price">{{ $contact->id }}</td>
                </tr>
                <tr>
                    <td><strong class="book-title">Name</strong></td>
                    <td class="item-price">{{ $contact->name }}</td>
                </tr>
                <tr>
                    <td><strong class="book-title">Email</strong></td>
                    <td class="item-price">{{ $contact->email }}</td>
                </tr>
                <tr>
                    <td><strong class="book-title">Phone No.</strong></td>
                    <td class="item-price">{{ $contact->phone_no }}</td>
                </tr>
                <tr>
                    <td><strong class="book-title">Message</strong></td>
                    <td class="item-price">{{ $contact->message }}</td>
                </tr>
                <tr>
                    <td><strong class="book-title">Created At</strong></td>
                    <td class="item-price">{{ $contact->created_at->toDateTimeString() }}</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
