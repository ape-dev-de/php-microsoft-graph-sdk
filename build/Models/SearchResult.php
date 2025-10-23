<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchResult
 */
class SearchResult
{
    /** A callback URL that can be used to record telemetry information. The application should issue a GET on this URL if the user interacts with this item to improve the quality of results. */
    public ?string $onClickTelemetryUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['onClickTelemetryUrl'])) {
            $this->onClickTelemetryUrl = $data['onClickTelemetryUrl'];
        }
    }
}
