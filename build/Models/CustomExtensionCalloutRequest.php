<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionCalloutRequest
 */
class CustomExtensionCalloutRequest
{
    /**
     * Contains the data that will be provided to the external system.
     */
    private ?string $data;

    /**
     * Identifies the source system or event context related to the callout request.
     */
    private ?string $source;

    /**
     * Describes the type of event related to the callout request.
     */
    private ?string $type;

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(?string $data): self
    {
        $this->data = $data;
        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
