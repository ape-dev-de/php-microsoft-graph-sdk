<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsParticipantBase
 */
class CallRecordsParticipantBase
{
    /**
     * List of administrativeUnitInfo objects for the call participant.
     */
    private array $administrativeUnitInfos = [];

    /**
     * The identity of the call participant.
     */
    private ?string $identity;


    public function getAdministrativeUnitInfos(): array
    {
        return $this->administrativeUnitInfos;
    }

    public function setAdministrativeUnitInfos(array $administrativeUnitInfos): self
    {
        $this->administrativeUnitInfos = $administrativeUnitInfos;
        return $this;
    }

    public function getIdentity(): ?string
    {
        return $this->identity;
    }

    public function setIdentity(?string $identity): self
    {
        $this->identity = $identity;
        return $this;
    }

}
