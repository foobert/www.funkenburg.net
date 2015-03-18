<!DOCTYPE html>
<html>
<head>
<title>Minecraft Server Status</title>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<style>
    html, body {
        margin: 0;
        height: 100%;
    }
    body {
        text-align: center;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
    }
    .wrapper {
        min-height: 100%;
        position: relative;
    }
    .content {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    .offline {
        color: red;
    }
    h1 {
        margin-bottom: 0px;
    }
    h2 {
        font-weight: 100;
        margin-top: 0px;
    }

    h2::before { content: '- '; }
    h2::after { content: ' -'; }

    @media (min-width: 1024px) {
        h1 {
            font-size: 5em;
        }
        h2 {
            font-size: 2em;
            margin-bottom: 5em;
        }
        .offline {
            font-size: 5em;
            color: red;
        }

        .status {
            font-size: 8em;
            margin: 0px;
        }

        .count {
            display: block;
        }
    }

    @media (max-width: 1024px) {
        h1 {
            font-size: 2em;
        }
        h2 {
            font-size: 1.5em;
        }
        .status {
            font-size: 4em;
        }
    }
</style>
</head>
<body>
<?
include_once 'status.class.php';
$status = new MinecraftServerStatus();
$response = $status->getStatus('copper.funkenburg.net');
?>
<div class="wrapper">
<h1>copper.funkenburg.net</h1>
<? if ($response) { ?>
<h2><?= $response['motd'] ?></h2>
<div class="content">
<p>
    <span class="count status"><?= $response['players'] ?></span>
    <span class="players status"><?= $response['players'] == 1 ? 'Player' : 'Players'?></span>
</p>
<? } else { ?>
<div class="content">
<p class="offline">The server is currently offline.</p>
<? } ?>
</div>
</div>
</body>
</html>
