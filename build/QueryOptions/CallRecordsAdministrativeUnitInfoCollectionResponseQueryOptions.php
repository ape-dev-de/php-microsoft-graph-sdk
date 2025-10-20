<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsAdministrativeUnitInfoCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CallRecordsAdministrativeUnitInfoCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CallRecordsAdministrativeUnitInfoCollectionResponse properties
     * 
     * @param array<string> $select Use CallRecordsAdministrativeUnitInfoCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
