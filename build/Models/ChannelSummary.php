<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelSummary
 */
class ChannelSummary
{
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
        if (isset($data['guestsCount'])) {
            $this->guestsCount = $data['guestsCount'];
        }
        if (isset($data['hasMembersFromOtherTenants'])) {
            $this->hasMembersFromOtherTenants = $data['hasMembersFromOtherTenants'];
        }
        if (isset($data['membersCount'])) {
            $this->membersCount = $data['membersCount'];
        }
        if (isset($data['ownersCount'])) {
            $this->ownersCount = $data['ownersCount'];
        }
    }
}
