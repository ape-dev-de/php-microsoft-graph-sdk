<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsUrlMatchInfo resources
 *
 * Available select fields:
 * - baseUrls
 * - urlPattern
 */
class ExternalConnectorsUrlMatchInfoQueryOptions extends QueryOptions
{
    public const FIELD_BASE_URLS = 'baseUrls';
    public const FIELD_URL_PATTERN = 'urlPattern';

    /**
     * Select specific ExternalConnectorsUrlMatchInfo properties
     * 
     * @param array<string> $select Use ExternalConnectorsUrlMatchInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
