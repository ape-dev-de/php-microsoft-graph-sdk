<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsParticipantBase
 */
class CallRecordsParticipantBase
{
    public function __construct(
        /** List of administrativeUnitInfo objects for the call participant. */
        public array $administrativeUnitInfos = [],
        /** The identity of the call participant. */
        public ?string $identity = null
    ) {}
}
