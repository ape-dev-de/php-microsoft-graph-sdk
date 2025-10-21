<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ToneInfo
 */
class ToneInfo
{
    public function __construct(
        /** An incremental identifier used for ordering DTMF events. */
        public ?float $sequenceId = null,
        /**  */
        public ?string $tone = null
    ) {}
}
