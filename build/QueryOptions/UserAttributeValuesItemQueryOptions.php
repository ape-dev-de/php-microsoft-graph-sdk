<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserAttributeValuesItem resources
 *
 * Available select fields:
 * - isDefault
 * - name
 * - value
 */
class UserAttributeValuesItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserAttributeValuesItem
     */
    public const FIELD_IS_DEFAULT = 'isDefault';
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserAttributeValuesItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
