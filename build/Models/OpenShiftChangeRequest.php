<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OpenShiftChangeRequest
 */
class OpenShiftChangeRequest
{
    /**
     * ID for the open shift.
     */
    private ?string $openShiftId;

    public function getOpenShiftId(): ?string
    {
        return $this->openShiftId;
    }

    public function setOpenShiftId(?string $openShiftId): self
    {
        $this->openShiftId = $openShiftId;
        return $this;
    }

}
