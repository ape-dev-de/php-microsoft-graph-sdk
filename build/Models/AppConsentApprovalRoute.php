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
     * @var string[]
     */
    private array $appConsentRequests = [];


    /**
     * @return string[]
     */
    public function getAppConsentRequests(): array
    {
        return $this->appConsentRequests;
    }

    /**
     * @param string[] $appConsentRequests
     */
    public function setAppConsentRequests(array $appConsentRequests): self
    {
        $this->appConsentRequests = $appConsentRequests;
        return $this;
    }

}
