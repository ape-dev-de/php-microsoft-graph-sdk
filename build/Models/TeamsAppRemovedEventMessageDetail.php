<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppRemovedEventMessageDetail
 */
class TeamsAppRemovedEventMessageDetail
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Initiator of the event.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $initiator = null;

    /** Display name of the teamsApp. */
    public ?string $teamsAppDisplayName = null;

    /** Unique identifier of the teamsApp. */
    public ?string $teamsAppId = null;


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
        if (isset($data['teamsAppDisplayName'])) {
            $this->teamsAppDisplayName = $data['teamsAppDisplayName'];
        }
        if (isset($data['teamsAppId'])) {
            $this->teamsAppId = $data['teamsAppId'];
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
