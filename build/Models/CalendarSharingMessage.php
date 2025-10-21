<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CalendarSharingMessage
 */
class CalendarSharingMessage
{
    /**
     */
    private ?bool $canAccept;

    /**
     */
    private ?string $sharingMessageAction;

    /**
     */
    private array $sharingMessageActions = [];

    /**
     */
    private ?string $suggestedCalendarName;


    public function getCanAccept(): ?bool
    {
        return $this->canAccept;
    }

    public function setCanAccept(?bool $canAccept): self
    {
        $this->canAccept = $canAccept;
        return $this;
    }

    public function getSharingMessageAction(): ?string
    {
        return $this->sharingMessageAction;
    }

    public function setSharingMessageAction(?string $sharingMessageAction): self
    {
        $this->sharingMessageAction = $sharingMessageAction;
        return $this;
    }

    public function getSharingMessageActions(): array
    {
        return $this->sharingMessageActions;
    }

    public function setSharingMessageActions(array $sharingMessageActions): self
    {
        $this->sharingMessageActions = $sharingMessageActions;
        return $this;
    }

    public function getSuggestedCalendarName(): ?string
    {
        return $this->suggestedCalendarName;
    }

    public function setSuggestedCalendarName(?string $suggestedCalendarName): self
    {
        $this->suggestedCalendarName = $suggestedCalendarName;
        return $this;
    }

}
