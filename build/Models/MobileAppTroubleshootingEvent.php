<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppTroubleshootingEvent
 */
class MobileAppTroubleshootingEvent
{
    /**
     * Indicates collection of App Log Upload Request.
     */
    private ?string $appLogCollectionRequests;

    public function getAppLogCollectionRequests(): ?string
    {
        return $this->appLogCollectionRequests;
    }

    public function setAppLogCollectionRequests(?string $appLogCollectionRequests): self
    {
        $this->appLogCollectionRequests = $appLogCollectionRequests;
        return $this;
    }

}
