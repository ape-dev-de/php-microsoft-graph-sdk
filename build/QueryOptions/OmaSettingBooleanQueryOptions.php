<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OmaSettingBoolean resources
 *
 * Available select fields:
 * - value
 */
class OmaSettingBooleanQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OmaSettingBoolean properties
     * 
     * @param array<string> $select Use OmaSettingBooleanQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
