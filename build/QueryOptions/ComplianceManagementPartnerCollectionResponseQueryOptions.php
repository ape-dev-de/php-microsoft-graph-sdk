<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ComplianceManagementPartnerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ComplianceManagementPartnerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ComplianceManagementPartnerCollectionResponse properties
     * 
     * @param array<string> $select Use ComplianceManagementPartnerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
