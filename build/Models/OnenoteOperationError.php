<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenoteOperationError
 */
class OnenoteOperationError
{
    public function __construct(
        /** The error code. */
        public ?string $code = null,
        /** The error message. */
        public ?string $message = null
    ) {}
}
