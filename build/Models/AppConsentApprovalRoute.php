<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppConsentApprovalRoute
 */
class AppConsentApprovalRoute
{
    /**
     * A collection of appConsentRequest objects representing apps for which admin consent has been requested by one or more users.
     */
    private ?string $appConsentRequests;

    public function getAppConsentRequests(): ?string
    {
        return $this->appConsentRequests;
    }

    public function setAppConsentRequests(?string $appConsentRequests): self
    {
        $this->appConsentRequests = $appConsentRequests;
        return $this;
    }

}
