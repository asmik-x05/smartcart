<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Merchant Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body style="margin: 0; padding: 0; background-color: #F8FAFC; font-family: 'Roboto', sans-serif;">

    <!-- Wrapper -->
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #F8FAFC; padding: 40px 0;">
        <tr>
            <td align="center">

                <!-- Container -->
                <table width="600" cellpadding="0" cellspacing="0"
                    style="background-color: #FFFFFF; border-radius: 16px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.06);">

                    <!-- Header -->
                    <tr>
                        <td style="background-color: #2563EB; padding: 32px 40px; text-align: center;">
                            <h1 style="color: #FFFFFF; font-size: 24px; font-weight: 700; margin: 0;">New Merchant
                                Application</h1>
                            <p style="color: rgba(255,255,255,0.85); font-size: 14px; margin: 8px 0 0 0;">Review pending
                                registration request</p>
                        </td>
                    </tr>

                    <!-- Status Badge -->
                    <tr>
                        <td style="padding: 24px 40px 0 40px; text-align: center;">
                            <span
                                style="display: inline-block; background-color: #FEF3C7; color: #92400E; font-size: 13px; font-weight: 600; padding: 6px 16px; border-radius: 999px; letter-spacing: 0.5px;">
                                PENDING REVIEW
                            </span>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding: 32px 40px;">
                            <p style="color: #0F172A; font-size: 16px; margin: 0 0 24px 0;">
                                A new merchant has submitted a registration request. Review the details below:
                            </p>

                            <!-- Info Card -->
                            <table width="100%" cellpadding="0" cellspacing="0"
                                style="background-color: #F8FAFC; border-radius: 12px; border: 1px solid #E2E8F0;">

                                <!-- Name -->
                                <tr>
                                    <td style="padding: 16px 20px; border-bottom: 1px solid #E2E8F0;">
                                        <p
                                            style="color: #64748B; font-size: 12px; font-weight: 500; margin: 0 0 4px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                                            Full Name</p>
                                        <p style="color: #0F172A; font-size: 15px; font-weight: 600; margin: 0;">
                                            {{ $merchant->name }}</p>
                                    </td>
                                </tr>

                                <!-- Email -->
                                <tr>
                                    <td style="padding: 16px 20px; border-bottom: 1px solid #E2E8F0;">
                                        <p
                                            style="color: #64748B; font-size: 12px; font-weight: 500; margin: 0 0 4px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                                            Email Address</p>
                                        <p style="color: #0F172A; font-size: 15px; font-weight: 600; margin: 0;">
                                            {{ $merchant->email }}</p>
                                    </td>
                                </tr>

                                <!-- Contact -->
                                <tr>
                                    <td style="padding: 16px 20px; border-bottom: 1px solid #E2E8F0;">
                                        <p
                                            style="color: #64748B; font-size: 12px; font-weight: 500; margin: 0 0 4px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                                            Contact Number</p>
                                        <p style="color: #0F172A; font-size: 15px; font-weight: 600; margin: 0;">
                                            {{ $merchant->contact_no }}</p>
                                    </td>
                                </tr>

                                <!-- Message -->
                                <tr>
                                    <td style="padding: 16px 20px;">
                                        <p
                                            style="color: #64748B; font-size: 12px; font-weight: 500; margin: 0 0 4px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                                            Message</p>
                                        <p style="color: #0F172A; font-size: 15px; margin: 0; line-height: 1.6;">
                                            {{ $merchant->message }}</p>
                                    </td>
                                </tr>

                            </table>



                            <!-- View All Link -->
                            <p style="text-align: center; margin-top: 20px;">
                                <a href="{{ url('/admin/merchants') }}" style="color: #64748B; font-size: 13px;">View
                                    all pending
                                    applications →</a>
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td
                            style="background-color: #F8FAFC; border-top: 1px solid #E2E8F0; padding: 20px 40px; text-align: center;">
                            <p style="color: #64748B; font-size: 12px; margin: 0 0 4px 0;">
                                <strong>{{ config('app.name') }}</strong> E-commerce Platform
                            </p>
                            <p style="color: #94A3B8; font-size: 11px; margin: 0;">This email was sent automatically
                                when a new merchant requested registration.</p>
                            <p style="margin-top: 15px; font-size: 12px;">
                                &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                            </p>
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
