<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InternetExplorerMode resources
 *
 * Available select fields:
 * - siteLists
 */
class InternetExplorerModeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for InternetExplorerMode
     */
    public const FIELD_SITE_LISTS = 'siteLists';

    /**
     * Select specific InternetExplorerMode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
