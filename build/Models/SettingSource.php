<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SettingSource
 */
class SettingSource
{
    /**
     * Not yet documented
     */
    private ?string $displayName;

    /**
     * Not yet documented
     */
    private ?string $id;

    /**
     */
    private ?string $sourceType;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getSourceType(): ?string
    {
        return $this->sourceType;
    }

    public function setSourceType(?string $sourceType): self
    {
        $this->sourceType = $sourceType;
        return $this;
    }

}
