<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResourceAccess resources
 *
 * Available select fields:
 * - id
 * - type
 */
class ResourceAccessQueryOptions extends QueryOptions
{
    public const FIELD_ID = 'id';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific ResourceAccess properties
     * 
     * @param array<string> $select Use ResourceAccessQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
