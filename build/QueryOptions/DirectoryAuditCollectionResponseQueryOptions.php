<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DirectoryAuditCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DirectoryAuditCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DirectoryAuditCollectionResponse properties
     * 
     * @param array<string> $select Use DirectoryAuditCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
