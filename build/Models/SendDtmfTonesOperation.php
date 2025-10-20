<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SendDtmfTonesOperation
 */
class SendDtmfTonesOperation
{
    /**
     * The results of the action. Possible values are: unknown, completedSuccessfully, mediaOperationCanceled, unknownfutureValue.
     */
    private ?string $completionReason;

    public function getCompletionReason(): ?string
    {
        return $this->completionReason;
    }

    public function setCompletionReason(?string $completionReason): self
    {
        $this->completionReason = $completionReason;
        return $this;
    }

}
