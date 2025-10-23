<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppRemovedEventMessageDetail
 */
class TeamsAppRemovedEventMessageDetail
{
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
        if (isset($data['initiator'])) {
            $this->initiator = $data['initiator'];
        }
        if (isset($data['teamsAppDisplayName'])) {
            $this->teamsAppDisplayName = $data['teamsAppDisplayName'];
        }
        if (isset($data['teamsAppId'])) {
            $this->teamsAppId = $data['teamsAppId'];
        }
    }
}
