<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccountTargetContent resources
 *
 * Available select fields:
 * - type
 */
class AccountTargetContentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccountTargetContent
     */
    public const FIELD_TYPE = 'type';

    /**
     * Select specific AccountTargetContent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
