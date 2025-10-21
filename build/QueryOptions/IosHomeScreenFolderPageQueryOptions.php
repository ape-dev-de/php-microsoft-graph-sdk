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
    /**
     * Available select fields for IosHomeScreenFolderPage
     */
    public const FIELD_APPS = 'apps';
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific IosHomeScreenFolderPage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
