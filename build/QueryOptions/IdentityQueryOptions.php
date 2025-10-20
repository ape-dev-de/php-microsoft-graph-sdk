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
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ID = 'id';

    /**
     * Select specific Identity properties
     * 
     * @param array<string> $select Use IdentityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
