<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BaseDeltaFunctionResponse
 */
class BaseDeltaFunctionResponse
{
    /**
     */
    private ?string $@odata.nextLink;

    /**
     */
    private ?string $@odata.deltaLink;

    public function get@odata.nextLink(): ?string
    {
        return $this->@odata.nextLink;
    }

    public function set@odata.nextLink(?string $@odata.nextLink): self
    {
        $this->@odata.nextLink = $@odata.nextLink;
        return $this;
    }

    public function get@odata.deltaLink(): ?string
    {
        return $this->@odata.deltaLink;
    }

    public function set@odata.deltaLink(?string $@odata.deltaLink): self
    {
        $this->@odata.deltaLink = $@odata.deltaLink;
        return $this;
    }

}
