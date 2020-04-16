<!doctype html>
<html>
<head>
    <meta charset="utf-8">
<style>
.message-box {
    max-width: 800px;
    margin: auto;
    padding: 30px;
    border: 1px solid #eee;
    box-shadow: 0 0 10px rgba(0, 0, 0, .25);
    font-size: 17px;
    line-height: 25px;
    font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    color: #2a2a2b;
    background: #ffffff;
}

.message-box table {
    width: 100%;
    line-height: inherit;
    text-align: left;
}

.message-box table td {
    padding: 6px;
    vertical-align: top;
}

.message-box table tr td:nth-child(2) {
    text-align: right;
}

.message-box table tr.top table td {
    padding-bottom: 20px;
}

.message-box table tr.top table td.title {
    font-size: 38px;
    line-height: 24px;
    color: #2ac77d;
    border-bottom: 1px solid #2ac77d;
    
}

.message-box table tr.information table td {
    padding-bottom: 20px;
    color: #2a2a2b;
}

.message-box table tr.heading td {
    background: #eee;
    border-bottom: 1px solid #ddd;
    font-weight: bold;
    color: #2a2a2b;
    
}

.message-box table tr.details td {
    padding-bottom: 20px;
    font-size: 14px;
    font-weight: normal;
}

.user-btn {
    background-color: #2ac77d;
    border: none;
    color: #ffffff;
    font-size: .8em;
    text-transform: uppercase;
    border-radius: 3px;
    margin-top: 3rem;
    padding: 10px;
}

.user-btn:hover {
    background-color: #23b36f;
    border: none;
    color: #fff;
}


@media only screen and (max-width: 600px) {
    .message-box table tr.top table td {
        width: 100%;
        display: block;
        text-align: center;
    }
    
    .message-box table tr.information table td {
        width: 100%;
        display: block;
        text-align: center;
    }
}
</style>
</head>

<body>
    <div class="message-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <strong>iTask</strong>
                            </td>                                                            
                       </tr>
                    </table>
                </td>
            </tr>           
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                            <strong>Resetting your password?</strong><br>
                                <a href="{{ $link = url('password/reset', $token).'?email=' . $email }}">
                                    <button type="submit" class="btn btn-lg btn-block user-btn">
                                        Click here
                                    </button>
                                </a>
                                <br><br>                              
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="details">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                                    <hr>
                                    &copy; Nutritional Assessment and Monitoring Division (NAMD)<br>
                                    <small>@include('inc.version')</small>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
        </table>
    </div>
</body>
</html>

