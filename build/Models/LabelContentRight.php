<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LabelContentRight
 */
class LabelContentRight
{
    /**
     * The content identifier.
     */
    private ?string $cid;

    /**
     * The content format.
     */
    private ?string $format;

    /**
     */
    private ?string $rights;

    /**
     */
    private ?string $label;

    public function getCid(): ?string
    {
        return $this->cid;
    }

    public function setCid(?string $cid): self
    {
        $this->cid = $cid;
        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(?string $format): self
    {
        $this->format = $format;
        return $this;
    }

    public function getRights(): ?string
    {
        return $this->rights;
    }

    public function setRights(?string $rights): self
    {
        $this->rights = $rights;
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

}
