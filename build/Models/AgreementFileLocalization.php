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
     * @var string[]
     */
    private array $versions = [];


    /**
     * @return string[]
     */
    public function getVersions(): array
    {
        return $this->versions;
    }

    /**
     * @param string[] $versions
     */
    public function setVersions(array $versions): self
    {
        $this->versions = $versions;
        return $this;
    }

}
