<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamSummary
 */
class TeamSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Count of guests in a team. */
    public ?float $guestsCount = null;

    /** Count of members in a team. */
    public ?float $membersCount = null;

    /** Count of owners in a team. */
    public ?float $ownersCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['guestsCount'])) {
            $this->guestsCount = is_numeric($data['guestsCount']) ? (float)$data['guestsCount'] : $data['guestsCount'];
        }
        if (isset($data['membersCount'])) {
            $this->membersCount = is_numeric($data['membersCount']) ? (float)$data['membersCount'] : $data['membersCount'];
        }
        if (isset($data['ownersCount'])) {
            $this->ownersCount = is_numeric($data['ownersCount']) ? (float)$data['ownersCount'] : $data['ownersCount'];
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
