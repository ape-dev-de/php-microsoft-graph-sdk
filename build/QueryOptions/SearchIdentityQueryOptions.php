<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchIdentity resources
 *
 * Available select fields:
 * - displayName
 * - id
 */
class SearchIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SearchIdentity
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ID = 'id';

    /**
     * Select specific SearchIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
