<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcAuditEventCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CloudPcAuditEventCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CloudPcAuditEventCollectionResponse properties
     * 
     * @param array<string> $select Use CloudPcAuditEventCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
