<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SettingSource resources
 *
 * Available select fields:
 * - displayName
 * - id
 * - sourceType
 */
class SettingSourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SettingSource
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ID = 'id';
    public const FIELD_SOURCE_TYPE = 'sourceType';

    /**
     * Select specific SettingSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
