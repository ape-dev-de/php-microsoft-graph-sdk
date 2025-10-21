<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GroupSettingTemplate resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - values
 */
class GroupSettingTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for GroupSettingTemplate
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_VALUES = 'values';

    /**
     * Select specific GroupSettingTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
