<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PublicErrorDetail
 */
class PublicErrorDetail
{
    public function __construct(
        /** The error code. */
        public ?string $code = null,
        /** The error message. */
        public ?string $message = null,
        /** The target of the error. */
        public ?string $target = null
    ) {}
}
