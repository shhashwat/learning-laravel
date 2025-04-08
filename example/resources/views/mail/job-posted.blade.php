<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Job Posted Successfully</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f6f8; margin: 0; padding: 40px;">
    <div style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 12px; padding: 40px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);">
        <h2 style="margin-bottom: 10px; color: #2d3748; font-size: 24px; text-align: center;">{{ $job->title }}</h2>
        <h3 style="color: #38a169; font-size: 22px; text-align: center; margin-bottom: 20px;">🎉 Congrats!!</h3>
        <p style="font-size: 18px; color: #4a5568; text-align: center; line-height: 1.6;">
            Your job is now <strong>live</strong> on our website!
        </p>
        <div style="text-align: center; margin-top: 30px;">
            <a href="{{ url('/jobs/' . $job->id) }}" 
               style="display: inline-block; background-color: #3182ce; color: #ffffff; padding: 12px 24px; font-size: 16px; border-radius: 6px; text-decoration: none;">
                🔍 View Job Listing
            </a>
        </div>
        <p style="margin-top: 40px; font-size: 14px; color: #a0aec0; text-align: center;">
            Thank you for choosing our platform. We’re excited to help you find the right talent!
        </p>
    </div>
</body>
</html>