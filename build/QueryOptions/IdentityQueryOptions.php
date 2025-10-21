<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Identity resources
 *
 * Available select fields:
 * - displayName
 * - id
 */
class IdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Identity
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ID = 'id';

    /**
     * Select specific Identity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
