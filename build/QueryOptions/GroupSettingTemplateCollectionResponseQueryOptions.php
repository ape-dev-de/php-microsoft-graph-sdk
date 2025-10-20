<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GroupSettingTemplateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class GroupSettingTemplateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific GroupSettingTemplateCollectionResponse properties
     * 
     * @param array<string> $select Use GroupSettingTemplateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
