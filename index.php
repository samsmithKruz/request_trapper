<?php

class Logger
{
    private $logFile;

    public function __construct($path)
    {
        $this->logFile = $path;
    }

    public function logRequest()
    {
        $timestamp = date('Y-m-d H:i:s');
        $method = $_SERVER['REQUEST_METHOD'] ?? 'UNKNOWN';
        $uri = $_SERVER['REQUEST_URI'] ?? 'UNKNOWN';
        $ip = $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN';
        $host = $_SERVER['HTTP_HOST'] ?? 'UNKNOWN';
        $referer = $_SERVER['HTTP_REFERER'] ?? 'NONE';
        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'UNKNOWN';

        $logEntry = <<<LOG
        
[$timestamp]
IP: $ip
Host: $host
Method: $method
URI: $uri
Referer: $referer
User-Agent: $userAgent

LOG;
        file_put_contents($this->logFile, $logEntry, FILE_APPEND);
    }
}


$logger = new Logger(__DIR__ . '/request.log');
$logger->logRequest();

http_response_code(200);
echo 'OK';
exit();
