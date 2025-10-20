<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SingleUser resources
 *
 * Available select fields:
 * - description
 * - userId
 */
class SingleUserQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific SingleUser properties
     * 
     * @param array<string> $select Use SingleUserQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
