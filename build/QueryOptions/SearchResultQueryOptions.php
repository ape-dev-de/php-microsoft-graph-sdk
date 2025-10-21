<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchResult resources
 *
 * Available select fields:
 * - onClickTelemetryUrl
 */
class SearchResultQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SearchResult
     */
    public const FIELD_ON_CLICK_TELEMETRY_URL = 'onClickTelemetryUrl';

    /**
     * Select specific SearchResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
