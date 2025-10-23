<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OutgoingCallOptions
 */
class OutgoingCallOptions
{
    /** Indicates whether to hide the app after the call is escalated. */
    public ?bool $hideBotAfterEscalation = null;

    /** Indicates whether content sharing notifications should be enabled for the call. */
    public ?bool $isContentSharingNotificationEnabled = null;

    /** Indicates whether delta roster is enabled for the call. */
    public ?bool $isDeltaRosterEnabled = null;

    /** Indicates whether delta roster filtering by participant interactivity is enabled. */
    public ?bool $isInteractiveRosterEnabled = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['hideBotAfterEscalation'])) {
            $this->hideBotAfterEscalation = $data['hideBotAfterEscalation'];
        }
        if (isset($data['isContentSharingNotificationEnabled'])) {
            $this->isContentSharingNotificationEnabled = $data['isContentSharingNotificationEnabled'];
        }
        if (isset($data['isDeltaRosterEnabled'])) {
            $this->isDeltaRosterEnabled = $data['isDeltaRosterEnabled'];
        }
        if (isset($data['isInteractiveRosterEnabled'])) {
            $this->isInteractiveRosterEnabled = $data['isInteractiveRosterEnabled'];
        }
    }
}
