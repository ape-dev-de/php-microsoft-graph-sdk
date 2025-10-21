<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationOnPremisesInfo
 */
class EducationOnPremisesInfo
{
    /**
     * Unique identifier for the user object in Active Directory.
     */
    private ?string $immutableId;


    public function getImmutableId(): ?string
    {
        return $this->immutableId;
    }

    public function setImmutableId(?string $immutableId): self
    {
        $this->immutableId = $immutableId;
        return $this;
    }

}
