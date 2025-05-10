<!DOCTYPE html>
<html>
    <head>
        <title>{{ config('app.name') }}  | Quote Query</title>
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
                background: #292f48;
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
                color: #000;
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
                    <th scope="col" colspan="2" style="color: #ffffff;">{{ config('app.name') }} - Quote Query Received</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong class="book-title">quote ID</strong></td>
                    <td class="item-price">{{ $quote->id }}</td>
                </tr>
                <tr>
                    <td><strong class="book-title">Name</strong></td>
                    <td class="item-price">{{ $quote->name }}</td>
                </tr>
                <tr>
                    <td><strong class="book-title">Email</strong></td>
                    <td class="item-price">{{ $quote->email }}</td>
                </tr>
                <tr>
                    <td><strong class="book-title">Phone</strong></td>
                    <td class="item-price">{{ $quote->phone_no }}</td>
                </tr>
                <tr>
                    <td><strong class="book-title">Service</strong></td>
                    <td class="item-price">
                        <ul>

                            @foreach(@json_decode($quote->service) as $services)

                                <li>{{ $services }}</li>

                            @endforeach

                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><strong class="book-title">Message</strong></td>
                    <td class="item-price">{{ $quote->message }}</td>
                </tr>

                @if (
                    !empty($quote->getMedia('uploads')) &&
                    count($quote->getMedia('uploads')) > 0
                )

                    <tr>
                        <td><strong class="book-title">Attachment</strong></td>
                        <td class="item-price">
                            <ul>

                                @foreach ($quote->getMedia('uploads') as $upload)

                                    <li>
                                        <a href="{{ $upload->getUrl() }}" target="_blank" rel="noopener noreferrer" download>
                                            {{ $upload->name }}
                                        </a>
                                    </li>

                                @endforeach

                            </ul>
                        </td>
                    </tr>

                @endif

                <tr>
                    <td><strong class="book-title">Created At</strong></td>
                    <td class="item-price">{{ $quote->created_at->toDateTimeString() }}</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
