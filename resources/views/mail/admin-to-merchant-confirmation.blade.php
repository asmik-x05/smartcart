<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Received</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body style="margin: 0; padding: 0; background-color: #F8FAFC; font-family: 'Roboto', sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #F8FAFC; padding: 40px 0;">
        <tr>
            <td align="center">

                <table width="560" cellpadding="0" cellspacing="0"
                    style="background-color: #FFFFFF; border-radius: 16px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.06);">

                    <!-- Header -->
                    <tr>
                        <td style="background-color: #2563EB; padding: 36px 40px; text-align: center;">
                            <!-- Icon -->
                            <div
                                style="background-color: rgba(255,255,255,0.15); width: 56px; height: 56px; border-radius: 50%; margin: 0 auto 16px auto; line-height: 56px; font-size: 28px;">
                                📝
                            </div>
                            <h1 style="color: #FFFFFF; font-size: 22px; font-weight: 700; margin: 0;">Application
                                Received!</h1>
                            <p style="color: rgba(255,255,255,0.85); font-size: 14px; margin: 8px 0 0 0;">We've got your
                                merchant registration request</p>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding: 36px 40px;">

                            <p style="color: #0F172A; font-size: 15px; margin: 0 0 8px 0; font-weight: 600;">
                                {{-- Hi {{ $merchant->name }}, --}}
                            </p>

                            <p style="color: #334155; font-size: 14px; line-height: 1.7; margin: 0 0 24px 0;">
                                Thank you for your interest in becoming a merchant on <strong>StoreName</strong>. Your
                                application is currently under review by our team.
                            </p>

                            <!-- Timeline / Steps -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 28px;">

                                <!-- Step 1 (active) -->
                                <tr>
                                    <td style="padding-bottom: 16px;">
                                        <table cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td
                                                    style="width: 28px; height: 28px; background-color: #2563EB; border-radius: 50%; text-align: center; line-height: 28px; font-size: 12px; color: #FFFFFF; font-weight: 700;">
                                                    ✓
                                                </td>
                                                <td style="padding-left: 14px;">
                                                    <p
                                                        style="color: #0F172A; font-size: 14px; font-weight: 600; margin: 0;">
                                                        Application Submitted</p>
                                                    <p style="color: #64748B; font-size: 12px; margin: 2px 0 0 0;">
                                                        {{ now()->format('F d, Y') }}</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Connector line -->
                                <tr>
                                    <td style="padding-left: 13px; padding-bottom: 16px;">
                                        <div style="width: 2px; height: 20px; background-color: #E2E8F0;"></div>
                                    </td>
                                </tr>

                                <!-- Step 2 (pending) -->
                                <tr>
                                    <td style="padding-bottom: 16px;">
                                        <table cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td
                                                    style="width: 28px; height: 28px; background-color: #F8FAFC; border: 2px solid #E2E8F0; border-radius: 50%; text-align: center; line-height: 24px; font-size: 12px; color: #94A3B8;">
                                                    ⏳
                                                </td>
                                                <td style="padding-left: 14px;">
                                                    <p
                                                        style="color: #64748B; font-size: 14px; font-weight: 500; margin: 0;">
                                                        Under Review</p>
                                                    <p style="color: #94A3B8; font-size: 12px; margin: 2px 0 0 0;">
                                                        Usually takes 1-2 business days</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Connector line -->
                                <tr>
                                    <td style="padding-left: 13px; padding-bottom: 16px;">
                                        <div style="width: 2px; height: 20px; background-color: #E2E8F0;"></div>
                                    </td>
                                </tr>

                                <!-- Step 3 (upcoming) -->
                                <tr>
                                    <td>
                                        <table cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td
                                                    style="width: 28px; height: 28px; background-color: #F8FAFC; border: 2px solid #E2E8F0; border-radius: 50%; text-align: center; line-height: 24px; font-size: 12px; color: #94A3B8;">
                                                    ✓
                                                </td>
                                                <td style="padding-left: 14px;">
                                                    <p
                                                        style="color: #94A3B8; font-size: 14px; font-weight: 500; margin: 0;">
                                                        Start Selling</p>
                                                    <p style="color: #CBD5E1; font-size: 12px; margin: 2px 0 0 0;">
                                                        Access your merchant dashboard</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                            </table>

                            <!-- Info Box -->
                            <table width="100%" cellpadding="0" cellspacing="0"
                                style="background-color: #F8FAFC; border-radius: 10px; border: 1px solid #E2E8F0; margin-bottom: 24px;">
                                <tr>
                                    <td style="padding: 16px 20px;">
                                        <p
                                            style="color: #0F172A; font-size: 13px; font-weight: 600; margin: 0 0 6px 0;">
                                            💡 What's next?</p>
                                        <p style="color: #475569; font-size: 13px; line-height: 1.6; margin: 0;">
                                            Once approved, you'll receive an email with instructions to set up your
                                            password and access your merchant dashboard.
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <!-- Application Summary -->
                            <p style="color: #0F172A; font-size: 13px; font-weight: 600; margin: 0 0 12px 0;">Your
                                application details:</p>

                            <table width="100%" cellpadding="0" cellspacing="0"
                                style="background-color: #F8FAFC; border-radius: 10px; border: 1px solid #E2E8F0;">
                                <tr>
                                    <td style="padding: 14px 20px; border-bottom: 1px solid #E2E8F0; width: 40%;">
                                        <span style="color: #64748B; font-size: 12px;">Name</span>
                                    </td>
                                    <td style="padding: 14px 20px; border-bottom: 1px solid #E2E8F0;">
                                        <span
                                            {{-- style="color: #0F172A; font-size: 13px; font-weight: 500;">{{ $merchant->name }}</span> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 14px 20px; border-bottom: 1px solid #E2E8F0;">
                                        <span style="color: #64748B; font-size: 12px;">Email</span>
                                    </td>
                                    <td style="padding: 14px 20px; border-bottom: 1px solid #E2E8F0;">
                                        <span
                                            {{-- style="color: #0F172A; font-size: 13px; font-weight: 500;">{{ $merchant->email }}</span> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 14px 20px;">
                                        <span style="color: #64748B; font-size: 12px;">Reference ID</span>
                                    </td>
                                    <td style="padding: 14px 20px;">
                                        <span
                                            {{-- style="color: #0F172A; font-size: 13px; font-weight: 500; font-family: monospace;">#{{ $merchant->id }}</span> --}}
                                    </td>
                                </tr>
                            </table>

                            <!-- CTA -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-top: 24px;">
                                <tr>
                                    <td align="center">
                                        <a href=""
                                            style="display: inline-block; color: #1D4ED8; font-size: 13px; font-weight: 500; text-decoration: none;">
                                            Need help? Contact support →
                                        </a>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td
                            style="background-color: #F8FAFC; border-top: 1px solid #E2E8F0; padding: 20px 40px; text-align: center;">
                            <p style="color: #0F172A; font-size: 13px; font-weight: 600; margin: 0 0 4px 0;">StoreName
                            </p>
                            <p style="color: #94A3B8; font-size: 11px; margin: 0;">© {{ now()->year }} StoreName. All
                                rights reserved.</p>
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
