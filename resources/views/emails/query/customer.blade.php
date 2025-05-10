@extends('emails.layouts.app')

@section('content')

    <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
            <tbody>
                <tr>
                    <td style="direction:ltr;font-size:0px;padding:0 20px;text-align:center;vertical-align:top;">
                        <!--[if mso | IE]>
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="" style="vertical-align:top;width:560px;" >
                                    <![endif]-->
                                    <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                            @include('emails.layouts.includes.greetings', ['name' => $contact->name])
                                            <tr>
                                                <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                    <div style="font-family:Poppins, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#555555;">
                                                        Thank you for showing interest in USA's Leading one stop shop of all Book Writing & Publishing matters.
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                    <div style="font-family:Poppins, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#555555;">
                                                        <strong style="color: #1e4454;">We have received your query</strong> and Our team of experts will get back to you within 12 hours to discuss further about your desired service.
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                    <div style="font-family:Poppins, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#555555;">
                                                        For any further queries, feel free to contact us via E-mail or Online Chat.
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                    <div style="font-family:Poppins, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#555555;">
                                                        Email us at <a href="mailto:{{ config('social-media.email') }}">{{ config('social-media.email') }}</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @include('emails.layouts.includes.live-chats')
                                            @include('emails.layouts.includes.regards')
                                        </table>
                                    </div>
                                    <!--[if mso | IE]>
                                </td>
                            </tr>
                        </table>
                        <![endif]-->
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
