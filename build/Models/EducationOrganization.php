<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationOrganization
 */
class EducationOrganization
{
    /**
     * Organization description.
     */
    private ?string $description;

    /**
     * Organization display name.
     */
    private ?string $displayName;

    /**
     * Source where this organization was created from. Possible values are: sis, manual.
     */
    private ?string $externalSource;

    /**
     * The name of the external source this resource was generated from.
     */
    private ?string $externalSourceDetail;

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

    public function getExternalSource(): ?string
    {
        return $this->externalSource;
    }

    public function setExternalSource(?string $externalSource): self
    {
        $this->externalSource = $externalSource;
        return $this;
    }

    public function getExternalSourceDetail(): ?string
    {
        return $this->externalSourceDetail;
    }

    public function setExternalSourceDetail(?string $externalSourceDetail): self
    {
        $this->externalSourceDetail = $externalSourceDetail;
        return $this;
    }

}
