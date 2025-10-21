<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ClassifcationErrorBase
 */
class ClassifcationErrorBase
{
    public function __construct(
        /** A service-defined error code string. */
        public ?string $code = null,
        /** Contains more specific, potentially internal error details. */
        public ?ClassificationInnerError $innerError = null,
        /** A human-readable representation of the error. */
        public ?string $message = null,
        /** The target of the error (for example, the specific property or item causing the issue). */
        public ?string $target = null
    ) {}
}
