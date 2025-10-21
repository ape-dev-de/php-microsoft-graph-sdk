<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SettingValue resources
 *
 * Available select fields:
 * - name
 * - value
 */
class SettingValueQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SettingValue
     */
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SettingValue properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
