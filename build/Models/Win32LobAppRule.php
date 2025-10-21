<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppRule
 */
class Win32LobAppRule
{
    public function __construct(
        /** A base complex type to store the detection or requirement rule data for a Win32 LOB app. */
        public ?string $ruleType = null
    ) {}
}
