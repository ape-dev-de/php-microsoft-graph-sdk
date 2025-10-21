<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsOrganizer
 */
class CallRecordsOrganizer
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** List of administrativeUnitInfo objects for the call participant. */
        public array $administrativeUnitInfos = [],
        /** The identity of the call participant. */
        public ?string $identity = null
    ) {}
}
