<!DOCTYPE html>
<html>
    <head>
        <title>{{ config('app.name') }} | Consultation Required</title>
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
                    <th scope="col" colspan="2" style="background: #c74b0f;">{{ config('app.name') }} - Consultation Required.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong class="book-title">Consultation ID</strong></td>
                    <td class="item-price">{{ $consultation->id }}</td>
                </tr>
                <tr>
                    <td><strong class="book-title">Name</strong></td>
                    <td class="item-price">{{ $consultation->name }}</td>
                </tr>
                <tr>
                    <td><strong class="book-title">Email</strong></td>
                    <td class="item-price">{{ $consultation->email }}</td>
                </tr>
                <tr>
                    <td><strong class="book-title">Phone No.</strong></td>
                    <td class="item-price">{{ $consultation->phone_no }}</td>
                </tr>
                <tr>
                    <td><strong class="book-title">Country</strong></td>
                    <td class="item-price">{{ get_country_name($consultation->country) }}</td>
                </tr>
                <tr>
                    <td><strong class="book-title">Date</strong></td>
                    <td class="item-price">{{ $consultation->date }}</td>
                </tr>
                <tr>
                    <td><strong class="book-title">Slot</strong></td>
                    <td class="item-price">{{ $consultation->slot }}</td>
                </tr>
                <tr>
                    <td><strong class="book-title">Mode of Meeting</strong></td>
                    <td class="item-price">{{ $consultation->mode_of_meeting }}</td>
                </tr>

                <tr>
                    <td><strong class="book-title">Details</strong></td>
                    <td class="item-price">{{ $consultation->details }}</td>
                </tr>

                @if (
                    !empty($consultation->getMedia('art-works')) &&
                    count($consultation->getMedia('art-works')) > 0
                )

                    <tr>
                        <td><strong class="book-title">Art Works</strong></td>
                        <td class="item-price">
                            <ol>

                                @foreach ($consultation->getMedia('art-works') as $upload)

                                    <li>
                                        <a href="{{ $upload->getUrl() }}" target="_blank" rel="noopener noreferrer" download>
                                            {{ $upload->name }}
                                        </a>
                                    </li>

                                @endforeach

                            </ol>
                        </td>
                    </tr>

                @endif

                <tr>
                    <td><strong class="book-title">Created At</strong></td>
                    <td class="item-price">{{ $consultation->created_at->toDateTimeString() }}</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
