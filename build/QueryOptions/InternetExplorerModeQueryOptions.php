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
    public const FIELD_SITE_LISTS = 'siteLists';

    /**
     * Select specific InternetExplorerMode properties
     * 
     * @param array<string> $select Use InternetExplorerModeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
