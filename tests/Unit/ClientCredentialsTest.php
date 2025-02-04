<?php

namespace Tests\Unit;

use Tests\TestCase;
use Zerotoprod\SpapiLwaSdk\ClientCredentials\ClientCredentialsResponse;

class ClientCredentialsTest extends TestCase
{
    /** @test */
    public function fromResponse(): void
    {
        $json = <<<JSON
        {
            "info": {
                "url": "https:\/\/api.amazon.com\/auth\/o2\/token",
                "content_type": "application\/json;charset=UTF-8",
                "http_code": 200,
                "header_size": 485,
                "request_size": 456,
                "filetime": -1,
                "ssl_verify_result": 0,
                "redirect_count": 0,
                "total_time": 0.253501,
                "namelookup_time": 0.005806,
                "connect_time": 0.073482,
                "pretransfer_time": 0.145056,
                "size_upload": 319,
                "size_download": 454,
                "speed_download": 1790,
                "speed_upload": 1258,
                "download_content_length": 454,
                "upload_content_length": 319,
                "starttransfer_time": 0.253461,
                "redirect_time": 0,
                "redirect_url": "",
                "primary_ip": "98.82.160.102",
                "certinfo": [],
                "primary_port": 443,
                "local_ip": "172.19.0.2",
                "local_port": 59644,
                "http_version": 2,
                "protocol": 2,
                "ssl_verifyresult": 0,
                "scheme": "HTTPS",
                "appconnect_time_us": 144995,
                "connect_time_us": 73482,
                "namelookup_time_us": 5806,
                "pretransfer_time_us": 145056,
                "redirect_time_us": 0,
                "starttransfer_time_us": 253461,
                "total_time_us": 253501
            },
            "error": "",
            "headers": {
                "Server": "Server",
                "Date": "Tue, 04 Feb 2025 20:30:37 GMT",
                "Content-Type": "application\/json;charset=UTF-8",
                "Content-Length": "454",
                "Connection": "keep-alive",
                "X-Amz-Rid": "Z7XY75V9MEPB0SB5ADSY",
                "X-Amzn-Requestid": "2bd1d4df-548d-4a5b-9ae8-72a76482e170",
                "X-Amz-Date": "Tue, 04 Feb 2025 20:30:37 GMT",
                "Cache-Control": "no-cache, no-store, must-revalidate",
                "Pragma": "no-cache",
                "Vary": "Content-Type,Accept-Encoding,User-Agent",
                "Strict-Transport-Security": "max-age=47474747; includeSubDomains; preload"
            },
            "response": {
                "access_token": "access_token",
                "scope": "scope",
                "token_type": "token_type",
                "expires_in": 3600
            }
        }
        JSON;

        $Response = ClientCredentialsResponse::fromResponse(json_decode($json, true));

        self::assertEquals('access_token', $Response->response->access_token);
        self::assertEquals('scope', $Response->response->scope);
        self::assertEquals('token_type', $Response->response->token_type);
        self::assertEquals(3600, $Response->response->expires_in);
    }
}