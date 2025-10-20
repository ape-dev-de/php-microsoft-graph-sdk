<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InsightIdentity
 */
class InsightIdentity
{
    /**
     * The email address of the user who shared the item.
     */
    private ?string $address;

    /**
     * The display name of the user who shared the item.
     */
    private ?string $displayName;

    /**
     * The ID of the user who shared the item.
     */
    private ?string $id;

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;
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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

}
