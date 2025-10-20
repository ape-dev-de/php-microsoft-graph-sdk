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
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_OMA_URI = 'omaUri';

    /**
     * Select specific OmaSetting properties
     * 
     * @param array<string> $select Use OmaSettingQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
