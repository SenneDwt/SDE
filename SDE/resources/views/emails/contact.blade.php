<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background: #f8f9fa;
            padding: 20px;
            border: 1px solid #e9ecef;
        }
        .field {
            margin-bottom: 15px;
        }
        .field strong {
            display: inline-block;
            width: 100px;
            color: #495057;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Nieuw Contact Formulier</h2>
    </div>
    
    <div class="content">
        <div class="field">
            <strong>Naam:</strong> {{ $name }}
        </div>
        
        <div class="field">
            <strong>Email:</strong> {{ $email }}
        </div>
        
        <div class="field">
            <strong>Onderwerp:</strong> {{ $subject }}
        </div>
        
        <div class="field">
            <strong>Bericht:</strong>
        </div>
        
        <div style="background: white; padding: 15px; border-radius: 4px; border-left: 4px solid #667eea;">
            {!! nl2br(e($message)) !!}
        </div>
    </div>
</body>
</html>