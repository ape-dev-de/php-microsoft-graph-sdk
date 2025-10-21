<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceUpdateMessageViewpoint
 */
class ServiceUpdateMessageViewpoint
{
    public function __construct(
        /** Indicates whether the user archived the message. */
        public ?bool $isArchived = null,
        /** Indicates whether the user marked the message as favorite. */
        public ?bool $isFavorited = null,
        /** Indicates whether the user read the message. */
        public ?string $isRead = null
    ) {}
}
