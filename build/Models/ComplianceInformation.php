<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ComplianceInformation
 */
class ComplianceInformation
{
    /**
     * Collection of the certification controls associated with the certification.
     */
    private array $certificationControls = [];

    /**
     * The name of the compliance certification, for example, ISO 27018:2014, GDPR, FedRAMP, and NIST 800-171.
     */
    private ?string $certificationName;

    public function getCertificationControls(): array
    {
        return $this->certificationControls;
    }

    public function setCertificationControls(array $certificationControls): self
    {
        $this->certificationControls = $certificationControls;
        return $this;
    }

    public function getCertificationName(): ?string
    {
        return $this->certificationName;
    }

    public function setCertificationName(?string $certificationName): self
    {
        $this->certificationName = $certificationName;
        return $this;
    }

}
