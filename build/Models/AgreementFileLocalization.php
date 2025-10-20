<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AgreementFileLocalization
 */
class AgreementFileLocalization
{
    /**
     * Read-only. Customized versions of the terms of use agreement in the Microsoft Entra tenant.
     */
    private ?string $versions;

    public function getVersions(): ?string
    {
        return $this->versions;
    }

    public function setVersions(?string $versions): self
    {
        $this->versions = $versions;
        return $this;
    }

}
