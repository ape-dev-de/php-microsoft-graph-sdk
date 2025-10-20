<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OmaSettingInteger resources
 *
 * Available select fields:
 * - value
 */
class OmaSettingIntegerQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OmaSettingInteger properties
     * 
     * @param array<string> $select Use OmaSettingIntegerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
