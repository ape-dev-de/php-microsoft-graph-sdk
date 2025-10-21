<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OmaSettingFloatingPoint resources
 *
 * Available select fields:
 * - value
 */
class OmaSettingFloatingPointQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OmaSettingFloatingPoint
     */
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OmaSettingFloatingPoint properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
