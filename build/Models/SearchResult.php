<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchResult
 */
class SearchResult
{
    /**
     * A callback URL that can be used to record telemetry information. The application should issue a GET on this URL if the user interacts with this item to improve the quality of results.
     */
    private ?string $onClickTelemetryUrl;


    public function getOnClickTelemetryUrl(): ?string
    {
        return $this->onClickTelemetryUrl;
    }

    public function setOnClickTelemetryUrl(?string $onClickTelemetryUrl): self
    {
        $this->onClickTelemetryUrl = $onClickTelemetryUrl;
        return $this;
    }

}
