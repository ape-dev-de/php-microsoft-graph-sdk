<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosHomeScreenPage resources
 *
 * Available select fields:
 * - displayName
 * - icons
 */
class IosHomeScreenPageQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ICONS = 'icons';

    /**
     * Select specific IosHomeScreenPage properties
     * 
     * @param array<string> $select Use IosHomeScreenPageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
