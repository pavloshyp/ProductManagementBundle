<?php

declare(strict_types=1);

namespace ProductManagement\EventListener;

use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class RequestExceptionListener
{
    public function onKernelException(ExceptionEvent $event): void
    {
        $exception = $event->getThrowable();
        $statusCode = JsonResponse::HTTP_INTERNAL_SERVER_ERROR;
        $headers = [];
        $message = 'Internal Server Error';

        if ($exception instanceof HttpExceptionInterface) {
            $statusCode = $exception->getStatusCode();
            $headers = $exception->getHeaders();
            if ($statusCode >= 400 && $statusCode < 500) {
                $message = $exception->getMessage();
            }
        }

        $response = new JsonResponse(['error' => $message], $statusCode, $headers);
        $event->setResponse($response);
    }
}
