<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ModifiedProperty resources
 *
 * Available select fields:
 * - displayName
 * - newValue
 * - oldValue
 */
class ModifiedPropertyQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_NEW_VALUE = 'newValue';
    public const FIELD_OLD_VALUE = 'oldValue';

    /**
     * Select specific ModifiedProperty properties
     * 
     * @param array<string> $select Use ModifiedPropertyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
