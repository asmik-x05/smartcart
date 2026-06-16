<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reset Your Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body
    style="
      margin: 0;
      padding: 0;
      background-color: #f8fafc;
      font-family: &quot;Roboto&quot;, sans-serif;
    ">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f8fafc; padding: 40px 0">
        <tr>
            <td align="center">
                <table width="560" cellpadding="0" cellspacing="0"
                    style="
              background-color: #ffffff;
              border-radius: 16px;
              overflow: hidden;
              box-shadow: 0 1px 3px rgba(0, 0, 0, 0.06);
            ">
                    <!-- Header -->
                    <tr>
                        <td
                            style="
                  background-color: #2563eb;
                  padding: 36px 40px;
                  text-align: center;
                ">
                            <h1
                                style="
                    color: #ffffff;
                    font-size: 22px;
                    font-weight: 700;
                    margin: 0;
                  ">
                                Reset Your Password
                            </h1>
                            <p
                                style="
                    color: rgba(255, 255, 255, 0.85);
                    font-size: 14px;
                    margin: 8px 0 0 0;
                  ">
                                We received a request to reset your password
                            </p>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding: 36px 40px">
                            <p
                                style="
                    color: #0f172a;
                    font-size: 15px;
                    font-weight: 600;
                    margin: 0 0 8px 0;
                  ">
                                Hi {{ $name }},
                            </p>

                            <p
                                style="
                    color: #334155;
                    font-size: 14px;
                    line-height: 1.7;
                    margin: 0 0 24px 0;
                  ">
                                You recently requested to reset your password for your
                                <strong style="color: #0f172a">{{ config('app.name') }}</strong> account.
                                Click the button below to create a new password.
                            </p>

                            <!-- CTA Button -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 24px">
                                <tr>
                                    <td align="center">
                                        <a href="{{ $resetUrl }}"
                                            style="
                          display: inline-block;
                          background-color: #2563eb;
                          color: #ffffff;
                          text-align: center;
                          padding: 16px 40px;
                          border-radius: 10px;
                          text-decoration: none;
                          font-size: 16px;
                          font-weight: 600;
                        ">
                                            Reset Password →
                                        </a>
                                    </td>
                                </tr>
                            </table>

                            <!-- Link expires -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 24px">
                                <tr>
                                    <td align="center">
                                        <table cellpadding="0" cellspacing="0"
                                            style="
                          background-color: #f8fafc;
                          border-radius: 8px;
                          border: 1px solid #e2e8f0;
                        ">
                                            <tr>
                                                <td style="padding: 10px 20px">
                                                    <p style="color: #64748b; font-size: 12px; margin: 0">
                                                        This link expires in
                                                        <strong style="color: #0f172a">60 minutes</strong>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            <!-- Divider -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 24px">
                                <tr>
                                    <td>
                                        <div style="border-top: 1px solid #e2e8f0"></div>
                                    </td>
                                </tr>
                            </table>

                            <!-- Fallback link -->
                            <p style="color: #64748b; font-size: 12px; margin: 0 0 8px 0">
                                Button not working? Copy and paste this link into your
                                browser:
                            </p>
                            <p
                                style="
                    color: #1d4ed8;
                    font-size: 12px;
                    word-break: break-all;
                    margin: 0 0 8px 0;
                  ">
                                {{ $resetUrl }}
                            </p>

                            <!-- Didn't request -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-top: 24px">
                                <tr>
                                    <td>
                                        <table cellpadding="0" cellspacing="0"
                                            style="
                          background-color: #fff7ed;
                          border-radius: 8px;
                          border: 1px solid #fed7aa;
                        ">
                                            <tr>
                                                <td style="padding: 12px 16px">
                                                    <p
                                                        style="
                                color: #c2410c;
                                font-size: 12px;
                                margin: 0;
                                line-height: 1.5;
                              ">
                                                        If you didn't request this, you can safely ignore
                                                        this email. Your password won't change until you
                                                        create a new one.
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td
                            style="
                  background-color: #f8fafc;
                  border-top: 1px solid #e2e8f0;
                  padding: 20px 40px;
                  text-align: center;
                ">
                            <p style="color: #64748b; font-size: 12px; margin: 0 0 4px 0">
                                <strong>{{ config('app.name') }}</strong> E-commerce Platform
                            </p>
                            <p style="color: #94a3b8; font-size: 11px; margin: 0">
                                This email was sent automatically when a password reset
                                request is received.
                            </p>
                            <p style="margin-top: 15px; font-size: 12px">
                                &copy; {{ date('Y') }} {{ config('app.name') }}. All rights
                                reserved.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
