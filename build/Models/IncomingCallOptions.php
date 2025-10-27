<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IncomingCallOptions
 */
class IncomingCallOptions
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['hideBotAfterEscalation'])) {
            $this->hideBotAfterEscalation = is_bool($data['hideBotAfterEscalation']) ? $data['hideBotAfterEscalation'] : (bool)$data['hideBotAfterEscalation'];
        }
        if (isset($data['isContentSharingNotificationEnabled'])) {
            $this->isContentSharingNotificationEnabled = is_bool($data['isContentSharingNotificationEnabled']) ? $data['isContentSharingNotificationEnabled'] : (bool)$data['isContentSharingNotificationEnabled'];
        }
        if (isset($data['isDeltaRosterEnabled'])) {
            $this->isDeltaRosterEnabled = is_bool($data['isDeltaRosterEnabled']) ? $data['isDeltaRosterEnabled'] : (bool)$data['isDeltaRosterEnabled'];
        }
        if (isset($data['isInteractiveRosterEnabled'])) {
            $this->isInteractiveRosterEnabled = is_bool($data['isInteractiveRosterEnabled']) ? $data['isInteractiveRosterEnabled'] : (bool)$data['isInteractiveRosterEnabled'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
