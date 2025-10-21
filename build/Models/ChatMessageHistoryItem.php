<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageHistoryItem
 */
class ChatMessageHistoryItem
{
    public function __construct(
        /**  */
        public ?string $actions = null,
        /** The date and time when the message was modified. */
        public ?\DateTimeInterface $modifiedDateTime = null,
        /** The reaction in the modified message. */
        public ?string $reaction = null
    ) {}
}
