<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IncomingContext
 */
class IncomingContext
{
    /** The ID of the participant that is under observation. Read-only. */
    public ?string $observedParticipantId = null;

    /** 
     * The identity that the call is happening on behalf of.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $onBehalfOf = null;

    /** The ID of the participant that triggered the incoming call. Read-only. */
    public ?string $sourceParticipantId = null;

    /** 
     * The identity that transferred the call.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $transferor = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['observedParticipantId'])) {
            $this->observedParticipantId = $data['observedParticipantId'];
        }
        if (isset($data['onBehalfOf'])) {
            $this->onBehalfOf = is_array($data['onBehalfOf']) ? new IdentitySet($data['onBehalfOf']) : $data['onBehalfOf'];
        }
        if (isset($data['sourceParticipantId'])) {
            $this->sourceParticipantId = $data['sourceParticipantId'];
        }
        if (isset($data['transferor'])) {
            $this->transferor = is_array($data['transferor']) ? new IdentitySet($data['transferor']) : $data['transferor'];
        }
    }
}
