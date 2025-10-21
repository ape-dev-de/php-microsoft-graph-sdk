<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PublicError
 */
class PublicError
{
    public function __construct(
        /** Represents the error code. */
        public ?string $code = null,
        /** Details of the error. */
        public array $details = [],
        /** Details of the inner error. */
        public ?PublicInnerError $innerError = null,
        /** A non-localized message for the developer. */
        public ?string $message = null,
        /** The target of the error. */
        public ?string $target = null
    ) {}
}
