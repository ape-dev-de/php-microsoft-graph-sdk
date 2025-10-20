<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcAuditPropertyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CloudPcAuditPropertyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CloudPcAuditPropertyCollectionResponse properties
     * 
     * @param array<string> $select Use CloudPcAuditPropertyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
