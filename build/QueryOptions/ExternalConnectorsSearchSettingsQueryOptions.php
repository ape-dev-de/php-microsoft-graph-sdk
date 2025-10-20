<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsSearchSettings resources
 *
 * Available select fields:
 * - searchResultTemplates
 */
class ExternalConnectorsSearchSettingsQueryOptions extends QueryOptions
{
    public const FIELD_SEARCH_RESULT_TEMPLATES = 'searchResultTemplates';

    /**
     * Select specific ExternalConnectorsSearchSettings properties
     * 
     * @param array<string> $select Use ExternalConnectorsSearchSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
