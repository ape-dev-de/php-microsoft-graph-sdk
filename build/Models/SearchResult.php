<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchResult
 */
class SearchResult
{
    public function __construct(
        /** A callback URL that can be used to record telemetry information. The application should issue a GET on this URL if the user interacts with this item to improve the quality of results. */
        public ?string $onClickTelemetryUrl = null
    ) {}
}
