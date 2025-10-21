<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaInfo
 */
class MediaInfo
{
    /**
     * Optional. Used to uniquely identity the resource. If passed in, the prompt uri is against this resourceId as a key.
     */
    private ?string $resourceId;

    /**
     * Path to the prompt that will be played. Currently supports only Wave file (.wav) format, single-channel, 16-bit samples with a 16,000 (16 KHz) sampling rate.
     */
    private ?string $uri;


    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }

    public function setResourceId(?string $resourceId): self
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    public function getUri(): ?string
    {
        return $this->uri;
    }

    public function setUri(?string $uri): self
    {
        $this->uri = $uri;
        return $this;
    }

}
