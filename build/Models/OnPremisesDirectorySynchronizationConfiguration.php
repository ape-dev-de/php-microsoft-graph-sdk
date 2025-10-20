<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesDirectorySynchronizationConfiguration
 */
class OnPremisesDirectorySynchronizationConfiguration
{
    /**
     * Contains the accidental deletion prevention configuration for a tenant.
     */
    private ?string $accidentalDeletionPrevention;

    public function getAccidentalDeletionPrevention(): ?string
    {
        return $this->accidentalDeletionPrevention;
    }

    public function setAccidentalDeletionPrevention(?string $accidentalDeletionPrevention): self
    {
        $this->accidentalDeletionPrevention = $accidentalDeletionPrevention;
        return $this;
    }

}
