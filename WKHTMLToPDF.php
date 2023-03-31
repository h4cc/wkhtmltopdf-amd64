<?php
namespace h4cc\WKHTMLToPDF;

class WKHTMLToPDF
{
    const PATH = __DIR__ . '/bin/wkhtmltopdf-amd64';
    const ARM64_PATH = __DIR__ . '/bin/wkhtmltopdf-arm64';

    public static function getBinaryPath() : String {
        if (php_uname('m') == 'aarch64' || php_uname('m') == 'arm64' ) {
            return self::ARM64_PATH;
        }
        return self::PATH;
    }
}