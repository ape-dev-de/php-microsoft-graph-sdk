<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TokenMeetingInfo
 */
class TokenMeetingInfo
{
    public function __construct(
        /** The token used to join the call. */
        public ?string $token = null
    ) {}
}
