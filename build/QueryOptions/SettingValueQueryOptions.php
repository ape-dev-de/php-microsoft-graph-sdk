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
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SettingValue properties
     * 
     * @param array<string> $select Use SettingValueQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
