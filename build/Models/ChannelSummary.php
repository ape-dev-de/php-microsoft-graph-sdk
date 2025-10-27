<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelSummary
 */
class ChannelSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Count of guests in a channel. */
    public ?float $guestsCount = null;

    /** Indicates whether external members are included on the channel. */
    public ?bool $hasMembersFromOtherTenants = null;

    /** Count of members in a channel. */
    public ?float $membersCount = null;

    /** Count of owners in a channel. */
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
        if (isset($data['hasMembersFromOtherTenants'])) {
            $this->hasMembersFromOtherTenants = is_bool($data['hasMembersFromOtherTenants']) ? $data['hasMembersFromOtherTenants'] : (bool)$data['hasMembersFromOtherTenants'];
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
