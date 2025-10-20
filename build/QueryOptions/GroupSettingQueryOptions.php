<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GroupSetting resources
 *
 * Available select fields:
 * - displayName
 * - templateId
 * - values
 */
class GroupSettingQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_TEMPLATE_ID = 'templateId';
    public const FIELD_VALUES = 'values';

    /**
     * Select specific GroupSetting properties
     * 
     * @param array<string> $select Use GroupSettingQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
