<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserStorage resources
 *
 * Available select fields:
 * - quota
 */
class UserStorageQueryOptions extends QueryOptions
{
    public const FIELD_QUOTA = 'quota';

    /**
     * Select specific UserStorage properties
     * 
     * @param array<string> $select Use UserStorageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
