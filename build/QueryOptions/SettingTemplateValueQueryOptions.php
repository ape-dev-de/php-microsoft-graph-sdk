<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SettingTemplateValue resources
 *
 * Available select fields:
 * - defaultValue
 * - description
 * - name
 * - type
 */
class SettingTemplateValueQueryOptions extends QueryOptions
{
    public const FIELD_DEFAULT_VALUE = 'defaultValue';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_NAME = 'name';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific SettingTemplateValue properties
     * 
     * @param array<string> $select Use SettingTemplateValueQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
