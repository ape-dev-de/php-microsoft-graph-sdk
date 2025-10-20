<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsIdentity
 */
class ExternalConnectorsIdentity
{
    /**
     * The type of identity. Possible values are: user or group for Microsoft Entra identities and externalgroup for groups in an external system.
     */
    private ?string $type;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
