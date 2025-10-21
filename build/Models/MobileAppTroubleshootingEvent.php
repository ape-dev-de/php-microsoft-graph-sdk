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
     * @var string[]
     */
    private array $appLogCollectionRequests = [];


    /**
     * @return string[]
     */
    public function getAppLogCollectionRequests(): array
    {
        return $this->appLogCollectionRequests;
    }

    /**
     * @param string[] $appLogCollectionRequests
     */
    public function setAppLogCollectionRequests(array $appLogCollectionRequests): self
    {
        $this->appLogCollectionRequests = $appLogCollectionRequests;
        return $this;
    }

}
