<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TabUpdatedEventMessageDetail
 */
class TabUpdatedEventMessageDetail
{
    /**
     * Initiator of the event.
     */
    private ?string $initiator;

    /**
     * Unique identifier of the tab.
     */
    private ?string $tabId;

    public function getInitiator(): ?string
    {
        return $this->initiator;
    }

    public function setInitiator(?string $initiator): self
    {
        $this->initiator = $initiator;
        return $this;
    }

    public function getTabId(): ?string
    {
        return $this->tabId;
    }

    public function setTabId(?string $tabId): self
    {
        $this->tabId = $tabId;
        return $this;
    }

}
