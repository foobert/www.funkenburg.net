<!DOCTYPE html>
<html>
<head>
<title>Minecraft Server Status</title>
<style>
    body {
        text-align: center;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
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

</style>
</head>
<body>
<?
include_once 'status.class.php';
$status = new MinecraftServerStatus();
$response = $status->getStatus('copper.funkenburg.net');
?>
<h1>copper.funkenburg.net</h1>
<? if ($response) { ?>
<h2><?= $response['motd'] ?></h2>
<p>
    <span class="count status"><?= $response['players'] ?></span>
    <span class="players status"><?= $response['players'] == 1 ? 'Player' : 'Players'?></span>
</p>
<? } else { ?>
<p class="offline">The server is currently offline.</p>
<? } ?>
</body>
</html>
