<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstanceDecisionItemServicePrincipalResource
 */
class AccessReviewInstanceDecisionItemServicePrincipalResource
{
    /**
     * The globally unique identifier of the application to which access has been granted.
     */
    private ?string $appId;


    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

}
