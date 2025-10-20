<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosHomeScreenFolderPage resources
 *
 * Available select fields:
 * - apps
 * - displayName
 */
class IosHomeScreenFolderPageQueryOptions extends QueryOptions
{
    public const FIELD_APPS = 'apps';
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific IosHomeScreenFolderPage properties
     * 
     * @param array<string> $select Use IosHomeScreenFolderPageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
