<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaStream
 */
class MediaStream
{
    /**
     */
    private ?string $direction;

    /**
     * The media stream label.
     */
    private ?string $label;

    /**
     */
    private ?string $mediaType;

    /**
     * If the media is muted by the server.
     */
    private ?bool $serverMuted;

    /**
     * The source ID.
     */
    private ?string $sourceId;

    public function getDirection(): ?string
    {
        return $this->direction;
    }

    public function setDirection(?string $direction): self
    {
        $this->direction = $direction;
        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;
        return $this;
    }

    public function getMediaType(): ?string
    {
        return $this->mediaType;
    }

    public function setMediaType(?string $mediaType): self
    {
        $this->mediaType = $mediaType;
        return $this;
    }

    public function getServerMuted(): ?bool
    {
        return $this->serverMuted;
    }

    public function setServerMuted(?bool $serverMuted): self
    {
        $this->serverMuted = $serverMuted;
        return $this;
    }

    public function getSourceId(): ?string
    {
        return $this->sourceId;
    }

    public function setSourceId(?string $sourceId): self
    {
        $this->sourceId = $sourceId;
        return $this;
    }

}
