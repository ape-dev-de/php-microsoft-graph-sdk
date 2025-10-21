<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsAdministrativeUnitInfo resources
 *
 * Available select fields:
 * - id
 */
class CallRecordsAdministrativeUnitInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsAdministrativeUnitInfo
     */
    public const FIELD_ID = 'id';

    /**
     * Select specific CallRecordsAdministrativeUnitInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
