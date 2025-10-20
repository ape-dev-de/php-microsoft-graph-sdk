<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OmaSettingDateTime resources
 *
 * Available select fields:
 * - value
 */
class OmaSettingDateTimeQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OmaSettingDateTime properties
     * 
     * @param array<string> $select Use OmaSettingDateTimeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
