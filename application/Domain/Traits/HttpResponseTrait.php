<?php
namespace App\Domain\Traits;

/**
 * Class HttpResponseTrait
 * @package App\Domain\Traits
 */
trait HttpResponseTrait
{
    /**
     * Return a error response in json.
     *
     * @param $message
     * @param $errorCode
     * @return string
     */
    protected function respondWithError($message,  $errorCode)
    {
        header('Content-Type: application/json');
        http_response_code($errorCode);
        return json_encode([
            'error' => [
                'http_code' => http_response_code(),
                'message' => $message,
            ]
        ]);
    }

    /**
     * Return a json response
     *
     * @param $data
     * @return string
     */
    protected function toJson($data)
    {
        header('Content-Type: application/json');
        return json_encode($data);
    }
}
