<?php

    
class Sanitizer
{
    public function sanitize($value) {
        return filter_var($value, $this->generateSanitizer($value));
    }

    private function isEmail($value) {
        return preg_match(
            '/^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',
            $value
        );
    }

    private function isDomain($value) {
        return preg_match('/^(?:[-A-Za-z0-9]+\.)+[A-Za-z]{2,6}$/', $value);
    }

    private function isIp($value) {
        return preg_match('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\z/', $value);
    }

    private function isUrl($value) {
        return preg_match(
            '/(http(s?):\/\/)([a-z0-9\-]+\.)+[a-z]{2,4}(\.[a-z]{2,4})*(\/[^ ]+)*/i',
            $value
        );
    }

    private function generateSanitizer($value) {
        if ($this->isDomain($value)) {
            return filter_id('validate_domain');
        }

        if ($this->isUrl($value)) {
            return  filter_id('url');
        }

        if ($this->isEmail($value)) {
            return filter_id('validate_email');
        }

        if ($this->isIp($value)) {
            return filter_id('validate_ip');
        }

        $type = gettype($value) == 'integer' ? 'int' : gettype($value);
        return filter_id($type);
    }
}

$sanitizer = new Sanitizer();

$sanitizer->sanitize("parvej.code@gmail.co<m>");