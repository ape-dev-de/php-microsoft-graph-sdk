<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamCreatedEventMessageDetail
 */
class TeamCreatedEventMessageDetail
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Initiator of the event.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $initiator = null;

    /** Description for the team. */
    public ?string $teamDescription = null;

    /** Display name of the team. */
    public ?string $teamDisplayName = null;

    /** Unique identifier of the team. */
    public ?string $teamId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['initiator'])) {
            $this->initiator = is_array($data['initiator']) ? new IdentitySet($data['initiator']) : $data['initiator'];
        }
        if (isset($data['teamDescription'])) {
            $this->teamDescription = $data['teamDescription'];
        }
        if (isset($data['teamDisplayName'])) {
            $this->teamDisplayName = $data['teamDisplayName'];
        }
        if (isset($data['teamId'])) {
            $this->teamId = $data['teamId'];
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
