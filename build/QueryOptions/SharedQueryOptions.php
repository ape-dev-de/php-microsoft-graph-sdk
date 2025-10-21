<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Shared resources
 *
 * Available select fields:
 * - owner
 * - scope
 * - sharedBy
 * - sharedDateTime
 */
class SharedQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Shared
     */
    public const FIELD_OWNER = 'owner';
    public const FIELD_SCOPE = 'scope';
    public const FIELD_SHARED_BY = 'sharedBy';
    public const FIELD_SHARED_DATE_TIME = 'sharedDateTime';

    /**
     * Select specific Shared properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
