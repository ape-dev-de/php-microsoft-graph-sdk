<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserConsentRequest
 */
class UserConsentRequest
{
    /**
     * The user's justification for requiring access to the app. Supports $filter (eq only) and $orderby.
     */
    private ?string $reason;

    /**
     * Approval decisions associated with a request.
     */
    private ?string $approval;


    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    public function getApproval(): ?string
    {
        return $this->approval;
    }

    public function setApproval(?string $approval): self
    {
        $this->approval = $approval;
        return $this;
    }

}
