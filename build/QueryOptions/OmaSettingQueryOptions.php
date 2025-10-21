<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OmaSetting resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - omaUri
 */
class OmaSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OmaSetting
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_OMA_URI = 'omaUri';

    /**
     * Select specific OmaSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
