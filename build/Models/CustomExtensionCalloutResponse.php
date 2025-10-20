<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionCalloutResponse
 */
class CustomExtensionCalloutResponse
{
    /**
     * Contains the data the external system provides to the custom extension endpoint.
     */
    private ?string $data;

    /**
     * Identifies the external system or event context related to the response.
     */
    private ?string $source;

    /**
     * Describes the type of event related to the response.
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
