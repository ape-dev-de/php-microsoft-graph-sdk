<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Fido2KeyRestrictions
 */
class Fido2KeyRestrictions
{
    /**
     * A collection of Authenticator Attestation GUIDs. AADGUIDs define key types and manufacturers.
     */
    private ?string $aaGuids;

    /**
     * Enforcement type. Possible values are: allow, block.
     */
    private ?string $enforcementType;

    /**
     * Determines if the configured key enforcement is enabled.
     */
    private ?string $isEnforced;

    public function getAaGuids(): ?string
    {
        return $this->aaGuids;
    }

    public function setAaGuids(?string $aaGuids): self
    {
        $this->aaGuids = $aaGuids;
        return $this;
    }

    public function getEnforcementType(): ?string
    {
        return $this->enforcementType;
    }

    public function setEnforcementType(?string $enforcementType): self
    {
        $this->enforcementType = $enforcementType;
        return $this;
    }

    public function getIsEnforced(): ?string
    {
        return $this->isEnforced;
    }

    public function setIsEnforced(?string $isEnforced): self
    {
        $this->isEnforced = $isEnforced;
        return $this;
    }

}
