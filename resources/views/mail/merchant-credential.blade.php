<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Account Credentials</title>
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

                            <h1 style="color: #FFFFFF; font-size: 22px; font-weight: 700; margin: 0;">Welcome to
                                {{ config('app.name') }}!</h1>
                            <p style="color: rgba(255,255,255,0.85); font-size: 14px; margin: 8px 0 0 0;">Your account
                                has been created</p>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding: 36px 40px;">

                            <p style="color: #0F172A; font-size: 15px; font-weight: 600; margin: 0 0 8px 0;">
                                Hi {{ $data['name'] }},
                            </p>

                            <p style="color: #334155; font-size: 14px; line-height: 1.7; margin: 0 0 24px 0;">
                                Your account on <strong style="color: #0F172A;">{{ config('app.name') }}</strong> has
                                been created. Use
                                the credentials below to log in to your account.
                            </p>

                            <!-- Credentials Card -->
                            <table width="100%" cellpadding="0" cellspacing="0"
                                style="background-color: #F8FAFC; border-radius: 12px; border: 1px solid #E2E8F0; margin-bottom: 24px;">

                                <!-- Email -->
                                <tr>
                                    <td style="padding: 16px 20px; border-bottom: 1px solid #E2E8F0;">
                                        <p
                                            style="color: #64748B; font-size: 12px; font-weight: 500; margin: 0 0 4px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                                            Email Address</p>
                                        <p style="color: #0F172A; font-size: 15px; font-weight: 600; margin: 0;">
                                            {{ $data['email'] }}</p>
                                    </td>
                                </tr>

                                <!-- Password -->
                                <tr>
                                    <td style="padding: 16px 20px;">
                                        <p
                                            style="color: #64748B; font-size: 12px; font-weight: 500; margin: 0 0 4px 0; text-transform: uppercase; letter-spacing: 0.5px;">
                                            Password</p>
                                        <p
                                            style="color: #0F172A; font-size: 15px; font-weight: 600; margin: 0; font-family: monospace; letter-spacing: 1px;">
                                            {{ $password }}</p>
                                    </td>
                                </tr>

                            </table>

                            <!-- CTA Button -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 24px;">
                                <tr>
                                    <td align="center">
                                        <a href="{{ url('/merchant/login') }}"
                                            style="display: inline-block; background-color: #2563EB; color: #FFFFFF; text-align: center; padding: 16px 40px; border-radius: 10px; text-decoration: none; font-size: 16px; font-weight: 600;">
                                            Log In to Your Account →
                                        </a>
                                    </td>
                                </tr>
                            </table>

                            <!-- Divider -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 24px;">
                                <tr>
                                    <td>
                                        <div style="border-top: 1px solid #E2E8F0;"></div>
                                    </td>
                                </tr>
                            </table>

                            <!-- Security Warning -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 16px;">
                                <tr>
                                    <td>
                                        <table cellpadding="0" cellspacing="0"
                                            style="background-color: #FFF7ED; border-radius: 8px; border: 1px solid #FED7AA;">
                                            <tr>
                                                <td style="padding: 12px 16px;">
                                                    <p
                                                        style="color: #C2410C; font-size: 12px; margin: 0; line-height: 1.5;">
                                                        For your security, please change your password after logging
                                                        in for the first time.
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            <!-- Tips -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 24px;">
                                <tr>
                                    <td>
                                        <table cellpadding="0" cellspacing="0"
                                            style="background-color: #EFF6FF; border-radius: 8px; border: 1px solid #BFDBFE;">
                                            <tr>
                                                <td style="padding: 12px 16px;">
                                                    <p
                                                        style="color: #1E40AF; font-size: 12px; margin: 0 0 4px 0; font-weight: 600;">
                                                        Tips for a strong password:</p>
                                                    <p
                                                        style="color: #1E40AF; font-size: 12px; margin: 0; line-height: 1.5;">
                                                        • Use at least 8 characters<br>
                                                        • Mix uppercase and lowercase letters<br>
                                                        • Include numbers and symbols
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            <!-- Support -->
                            <p style="text-align: center; margin: 0;">
                                <a href="{{ url('/support') }}"
                                    style="color: #1D4ED8; font-size: 13px; font-weight: 500; text-decoration: none;">
                                    Need help? Contact support →
                                </a>
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
                                when a new merchant was approved.</p>
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
