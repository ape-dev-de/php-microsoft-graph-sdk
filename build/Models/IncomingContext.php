<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IncomingContext
 */
class IncomingContext
{
    public function __construct(
        /** The ID of the participant that is under observation. Read-only. */
        public ?string $observedParticipantId = null,
        /** The identity that the call is happening on behalf of. */
        public ?IdentitySet $onBehalfOf = null,
        /** The ID of the participant that triggered the incoming call. Read-only. */
        public ?string $sourceParticipantId = null,
        /** The identity that transferred the call. */
        public ?IdentitySet $transferor = null
    ) {}
}
