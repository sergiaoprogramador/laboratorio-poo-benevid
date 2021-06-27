<?php

namespace App\Traits;

trait ResponseAPI
{
    /**
     * Core of response
     *
     * @param   string          $message
     * @param   mixed           $data
     * @param   integer         $statusCode
     * @param   boolean         $isSuccess
     * @return  object
    */

    public function coreResponse(string $message, mixed $data = null, int $statusCode = 200, bool $isSuccess = true): object
    {
        // Check $message
        if(!$message) return response()->json(['message' => 'Mensagem é requerida!'], 500);

        // Send the response
        if($isSuccess) {
            return response()->json([
                'message' => $message,
                'error' => false,
                'code' => $statusCode,
                'results' => $data
            ], $statusCode);
        } else {
            return response()->json([
                'message' => $message,
                'error' => true,
                'code' => $statusCode
            ], $statusCode);
        }
    }

    /**
     * Callback for success response
     *
     * @param   string          $message
     * @param   mixed           $data
     * @param   integer         $statusCode
     * @return  object
    */
    public function success(string $message, mixed $data = null, int $statusCode = 200): object
    {
        return $this->coreResponse($message, $data, $statusCode);
    }

    /**
     * Callback for error response
     *
     * @param   string          $message
     * @param   integer         $statusCode
     * @return  object
    */
    public function error(string $message, int $statusCode = 500): object
    {
        return $this->coreResponse($message, null, $statusCode, false);
    }
}
