<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StandardWebPart
 */
class StandardWebPart
{
    /**
     * The instance identifier of the container text webPart. It only works for inline standard webPart in rich text webParts.
     */
    private ?string $containerTextWebPartId;

    /**
     * Data of the webPart.
     */
    private ?string $data;

    /**
     * A Guid that indicates the webPart type.
     */
    private ?string $webPartType;


    public function getContainerTextWebPartId(): ?string
    {
        return $this->containerTextWebPartId;
    }

    public function setContainerTextWebPartId(?string $containerTextWebPartId): self
    {
        $this->containerTextWebPartId = $containerTextWebPartId;
        return $this;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(?string $data): self
    {
        $this->data = $data;
        return $this;
    }

    public function getWebPartType(): ?string
    {
        return $this->webPartType;
    }

    public function setWebPartType(?string $webPartType): self
    {
        $this->webPartType = $webPartType;
        return $this;
    }

}
