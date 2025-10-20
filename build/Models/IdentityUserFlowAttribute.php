<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityUserFlowAttribute
 */
class IdentityUserFlowAttribute
{
    /**
     */
    private ?string $dataType;

    /**
     * The description of the user flow attribute that's shown to the user at the time of sign up.
     */
    private ?string $description;

    /**
     * The display name of the user flow attribute.  Supports $filter (eq, ne).
     */
    private ?string $displayName;

    /**
     */
    private ?string $userFlowAttributeType;

    public function getDataType(): ?string
    {
        return $this->dataType;
    }

    public function setDataType(?string $dataType): self
    {
        $this->dataType = $dataType;
        return $this;
    }

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

    public function getUserFlowAttributeType(): ?string
    {
        return $this->userFlowAttributeType;
    }

    public function setUserFlowAttributeType(?string $userFlowAttributeType): self
    {
        $this->userFlowAttributeType = $userFlowAttributeType;
        return $this;
    }

}
