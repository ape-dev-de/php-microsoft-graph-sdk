<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuditResourceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AuditResourceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AuditResourceCollectionResponse properties
     * 
     * @param array<string> $select Use AuditResourceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
