<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InsightIdentity resources
 *
 * Available select fields:
 * - address
 * - displayName
 * - id
 */
class InsightIdentityQueryOptions extends QueryOptions
{
    public const FIELD_ADDRESS = 'address';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ID = 'id';

    /**
     * Select specific InsightIdentity properties
     * 
     * @param array<string> $select Use InsightIdentityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
