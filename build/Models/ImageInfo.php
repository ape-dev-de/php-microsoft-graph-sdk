<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImageInfo
 */
class ImageInfo
{
    /**
     * Optional; parameter used to indicate the server is able to render image dynamically in response to parameterization. For example – a high contrast image
     */
    private ?bool $addImageQuery;

    /**
     * Optional; alt-text accessible content for the image
     */
    private ?string $alternateText;

    /**
     */
    private ?string $alternativeText;

    /**
     * Optional; URI that points to an icon which represents the application used to generate the activity
     */
    private ?string $iconUrl;

    public function getAddImageQuery(): ?bool
    {
        return $this->addImageQuery;
    }

    public function setAddImageQuery(?bool $addImageQuery): self
    {
        $this->addImageQuery = $addImageQuery;
        return $this;
    }

    public function getAlternateText(): ?string
    {
        return $this->alternateText;
    }

    public function setAlternateText(?string $alternateText): self
    {
        $this->alternateText = $alternateText;
        return $this;
    }

    public function getAlternativeText(): ?string
    {
        return $this->alternativeText;
    }

    public function setAlternativeText(?string $alternativeText): self
    {
        $this->alternativeText = $alternativeText;
        return $this;
    }

    public function getIconUrl(): ?string
    {
        return $this->iconUrl;
    }

    public function setIconUrl(?string $iconUrl): self
    {
        $this->iconUrl = $iconUrl;
        return $this;
    }

}
