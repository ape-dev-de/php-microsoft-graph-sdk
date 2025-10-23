<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamRenamedEventMessageDetail
 */
class TeamRenamedEventMessageDetail
{
    /** 
     * Initiator of the event.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $initiator = null;

    /** The updated name of the team. */
    public ?string $teamDisplayName = null;

    /** Unique identifier of the team. */
    public ?string $teamId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['initiator'])) {
            $this->initiator = $data['initiator'];
        }
        if (isset($data['teamDisplayName'])) {
            $this->teamDisplayName = $data['teamDisplayName'];
        }
        if (isset($data['teamId'])) {
            $this->teamId = $data['teamId'];
        }
    }
}
