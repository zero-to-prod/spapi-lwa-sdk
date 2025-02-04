<?php

namespace Tests\Unit;

use Tests\TestCase;
use Zerotoprod\SpapiLwaSdk\RefreshToken\RefreshTokenResponse;

class RefreshTokenTest extends TestCase
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
                "request_size": 757,
                "filetime": -1,
                "ssl_verify_result": 0,
                "redirect_count": 0,
                "total_time": 0.294094,
                "namelookup_time": 0.047598,
                "connect_time": 0.10994,
                "pretransfer_time": 0.184954,
                "size_upload": 620,
                "size_download": 785,
                "speed_download": 2669,
                "speed_upload": 2108,
                "download_content_length": 785,
                "upload_content_length": 620,
                "starttransfer_time": 0.29406,
                "redirect_time": 0,
                "redirect_url": "",
                "primary_ip": "98.82.155.171",
                "certinfo": [],
                "primary_port": 443,
                "local_ip": "172.19.0.2",
                "local_port": 60774,
                "http_version": 2,
                "protocol": 2,
                "ssl_verifyresult": 0,
                "scheme": "HTTPS",
                "appconnect_time_us": 184842,
                "connect_time_us": 109940,
                "namelookup_time_us": 47598,
                "pretransfer_time_us": 184954,
                "redirect_time_us": 0,
                "starttransfer_time_us": 294060,
                "total_time_us": 294094
            },
            "error": "",
            "headers": {
                "Server": "Server",
                "Date": "Tue, 04 Feb 2025 20:21:30 GMT",
                "Content-Type": "application\/json;charset=UTF-8",
                "Content-Length": "785",
                "Connection": "keep-alive",
                "X-Amz-Rid": "5P94YMFSHE8EXTCA0FZR",
                "X-Amzn-Requestid": "e99cd061-4ce4-448f-afe1-3ec9136b887d",
                "X-Amz-Date": "Tue, 04 Feb 2025 20:21:30 GMT",
                "Cache-Control": "no-cache, no-store, must-revalidate",
                "Pragma": "no-cache",
                "Vary": "Content-Type,Accept-Encoding,User-Agent",
                "Strict-Transport-Security": "max-age=47474747; includeSubDomains; preload"
            },
            "response": {
                "access_token": "access_token",
                "refresh_token": "refresh_token",
                "token_type": "token_type",
                "expires_in": 3600
            }
        }
        JSON;

        $Response = RefreshTokenResponse::fromResponse(json_decode($json, true));

        self::assertEquals('access_token', $Response->response->access_token);
        self::assertEquals('refresh_token', $Response->response->refresh_token);
        self::assertEquals('token_type', $Response->response->token_type);
        self::assertEquals(3600, $Response->response->expires_in);
    }
}