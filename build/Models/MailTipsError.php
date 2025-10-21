<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailTipsError
 */
class MailTipsError
{
    public function __construct(
        /** The error code. */
        public ?string $code = null,
        /** The error message. */
        public ?string $message = null
    ) {}
}
