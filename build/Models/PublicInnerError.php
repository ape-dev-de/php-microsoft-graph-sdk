<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PublicInnerError
 */
class PublicInnerError
{
    public function __construct(
        /** The error code. */
        public ?string $code = null,
        /** A collection of error details. */
        public array $details = [],
        /** The error message. */
        public ?string $message = null,
        /** The target of the error. */
        public ?string $target = null
    ) {}
}
