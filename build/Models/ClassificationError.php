<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ClassificationError
 */
class ClassificationError
{
    public function __construct(
        /** A service-defined error code string. */
        public ?string $code = null,
        /** Contains more specific, potentially internal error details. */
        public ?string $innerError = null,
        /** A human-readable representation of the error. */
        public ?string $message = null,
        /** The target of the error (for example, the specific property or item causing the issue). */
        public ?string $target = null,
        /** @var string[] A collection of more specific errors contributing to the overall error. */
        public array $details = []
    ) {}
}
