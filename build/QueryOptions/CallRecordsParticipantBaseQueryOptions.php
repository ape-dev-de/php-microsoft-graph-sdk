<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsParticipantBase resources
 *
 * Available select fields:
 * - administrativeUnitInfos
 * - identity
 */
class CallRecordsParticipantBaseQueryOptions extends QueryOptions
{
    public const FIELD_ADMINISTRATIVE_UNIT_INFOS = 'administrativeUnitInfos';
    public const FIELD_IDENTITY = 'identity';

    /**
     * Select specific CallRecordsParticipantBase properties
     * 
     * @param array<string> $select Use CallRecordsParticipantBaseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
