<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExcludeTarget
 */
class ExcludeTarget
{
    /**
     * The object identifier of a Microsoft Entra user or group.
     */
    private ?string $id;

    /**
     */
    private ?string $targetType;


    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getTargetType(): ?string
    {
        return $this->targetType;
    }

    public function setTargetType(?string $targetType): self
    {
        $this->targetType = $targetType;
        return $this;
    }

}
