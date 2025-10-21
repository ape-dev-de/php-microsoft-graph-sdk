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
    /**
     * Available select fields for ExternalConnectorsSearchSettings
     */
    public const FIELD_SEARCH_RESULT_TEMPLATES = 'searchResultTemplates';

    /**
     * Select specific ExternalConnectorsSearchSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
