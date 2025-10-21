<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatRestrictions
 */
class ChatRestrictions
{
    public function __construct(
        /** Indicates whether only text is allowed in the meeting chat. Optional. */
        public ?bool $allowTextOnly = null
    ) {}
}
