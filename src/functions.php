<?php

declare(strict_types=1);

namespace Graywings\Exceptions;

use ErrorException;

if (!function_exists('GrayWings\Exceptions\initHandler')) {
    /**
     * @return void
     * @throws ErrorException
     */
    function initHandler(): void
    {
        set_error_handler(callback: function (
            int    $severity,
            string $message,
            string $file,
            int    $line
        ): bool|callable {
            throw new ErrorException($message, 0, $severity, $file, $line);
        });
    }
}
