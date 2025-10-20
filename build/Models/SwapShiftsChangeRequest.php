<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SwapShiftsChangeRequest
 */
class SwapShiftsChangeRequest
{
    /**
     * The recipient's Shift ID
     */
    private ?string $recipientShiftId;

    public function getRecipientShiftId(): ?string
    {
        return $this->recipientShiftId;
    }

    public function setRecipientShiftId(?string $recipientShiftId): self
    {
        $this->recipientShiftId = $recipientShiftId;
        return $this;
    }

}
