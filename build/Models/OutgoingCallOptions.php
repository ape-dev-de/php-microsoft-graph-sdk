<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OutgoingCallOptions
 */
class OutgoingCallOptions
{
    public function __construct(
        /** Indicates whether to hide the app after the call is escalated. */
        public ?bool $hideBotAfterEscalation = null,
        /** Indicates whether content sharing notifications should be enabled for the call. */
        public ?bool $isContentSharingNotificationEnabled = null,
        /** Indicates whether delta roster is enabled for the call. */
        public ?bool $isDeltaRosterEnabled = null,
        /** Indicates whether delta roster filtering by participant interactivity is enabled. */
        public ?string $isInteractiveRosterEnabled = null
    ) {}
}
