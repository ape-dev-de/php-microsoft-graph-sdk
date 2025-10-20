<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsAcl
 */
class ExternalConnectorsAcl
{
    /**
     */
    private ?string $accessType;

    /**
     */
    private ?string $type;

    /**
     * The unique identifer of the identity. For Microsoft Entra identities, value is set to the object identifier of the user, group or tenant for types user, group and everyone (and everyoneExceptGuests) respectively. For external groups value is set to the ID of the externalGroup
     */
    private ?string $value;

    public function getAccessType(): ?string
    {
        return $this->accessType;
    }

    public function setAccessType(?string $accessType): self
    {
        $this->accessType = $accessType;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

}
