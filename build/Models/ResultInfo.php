<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResultInfo
 */
class ResultInfo
{
    public function __construct(
        /** The result code. */
        public ?float $code = null,
        /** The message. */
        public ?string $message = null,
        /** The result subcode. */
        public ?string $subcode = null
    ) {}
}
