<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OmaSetting
 */
class OmaSetting
{
    /**
     * Description.
     */
    private ?string $description;

    /**
     * Display Name.
     */
    private ?string $displayName;

    /**
     * OMA Settings definition.
     */
    private ?string $omaUri;


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getOmaUri(): ?string
    {
        return $this->omaUri;
    }

    public function setOmaUri(?string $omaUri): self
    {
        $this->omaUri = $omaUri;
        return $this;
    }

}
