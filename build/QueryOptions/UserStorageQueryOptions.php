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
    /**
     * Available select fields for UserStorage
     */
    public const FIELD_QUOTA = 'quota';

    /**
     * Select specific UserStorage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
