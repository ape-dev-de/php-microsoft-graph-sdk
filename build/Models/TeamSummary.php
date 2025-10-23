<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamSummary
 */
class TeamSummary
{
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
        if (isset($data['guestsCount'])) {
            $this->guestsCount = $data['guestsCount'];
        }
        if (isset($data['membersCount'])) {
            $this->membersCount = $data['membersCount'];
        }
        if (isset($data['ownersCount'])) {
            $this->ownersCount = $data['ownersCount'];
        }
    }
}
