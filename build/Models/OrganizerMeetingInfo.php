<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OrganizerMeetingInfo
 */
class OrganizerMeetingInfo
{
    /**  */
    public ?IdentitySet $organizer = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['organizer'])) {
            $this->organizer = is_array($data['organizer']) ? new IdentitySet($data['organizer']) : $data['organizer'];
        }
    }
}
