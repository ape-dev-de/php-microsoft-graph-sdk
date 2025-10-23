<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamDescriptionUpdatedEventMessageDetail
 */
class TeamDescriptionUpdatedEventMessageDetail
{
    /** 
     * Initiator of the event.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $initiator = null;

    /** The updated description for the team. */
    public ?string $teamDescription = null;

    /** Unique identifier of the team. */
    public ?string $teamId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['initiator'])) {
            $this->initiator = is_array($data['initiator']) ? new IdentitySet($data['initiator']) : $data['initiator'];
        }
        if (isset($data['teamDescription'])) {
            $this->teamDescription = $data['teamDescription'];
        }
        if (isset($data['teamId'])) {
            $this->teamId = $data['teamId'];
        }
    }
}
