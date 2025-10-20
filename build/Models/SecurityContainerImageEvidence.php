<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityContainerImageEvidence
 */
class SecurityContainerImageEvidence
{
    /**
     * The digest image entity, in case this is a tag image.
     */
    private ?string $digestImage;

    /**
     * The unique identifier for the container image entity.
     */
    private ?string $imageId;

    /**
     * The container registry for this image.
     */
    private ?string $registry;

    public function getDigestImage(): ?string
    {
        return $this->digestImage;
    }

    public function setDigestImage(?string $digestImage): self
    {
        $this->digestImage = $digestImage;
        return $this;
    }

    public function getImageId(): ?string
    {
        return $this->imageId;
    }

    public function setImageId(?string $imageId): self
    {
        $this->imageId = $imageId;
        return $this;
    }

    public function getRegistry(): ?string
    {
        return $this->registry;
    }

    public function setRegistry(?string $registry): self
    {
        $this->registry = $registry;
        return $this;
    }

}
