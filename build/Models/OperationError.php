<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OperationError
 */
class OperationError
{
    public function __construct(
        /** Operation error code. */
        public ?string $code = null,
        /** Operation error message. */
        public ?string $message = null
    ) {}
}
