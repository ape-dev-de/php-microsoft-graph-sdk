<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsAdministrativeUnitInfo
 */
class CallRecordsAdministrativeUnitInfo
{
    /**
     * Unique identifier for the administrative unit.
     */
    private ?string $id;


    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

}
