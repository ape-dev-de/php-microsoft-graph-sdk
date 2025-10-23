<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallParticipantInfo
 */
class CallParticipantInfo
{
    /** 
     * Identity of the call participant.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $participant = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['participant'])) {
            $this->participant = is_array($data['participant']) ? new IdentitySet($data['participant']) : $data['participant'];
        }
    }
}
