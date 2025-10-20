<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SettingTemplateValueCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SettingTemplateValueCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SettingTemplateValueCollectionResponse properties
     * 
     * @param array<string> $select Use SettingTemplateValueCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
