<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppContent resources
 *
 * Available select fields:
 * - containedApps
 * - files
 */
class MobileAppContentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileAppContent
     */
    public const FIELD_CONTAINED_APPS = 'containedApps';
    public const FIELD_FILES = 'files';

    /**
     * Select specific MobileAppContent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
