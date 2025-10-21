<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OutOfOfficeSettings
 */
class OutOfOfficeSettings
{
    /**
     * If true, either of the following is met:The current time falls within the out-of-office window configured in Outlook or Teams.An event marked as ''Show as Out of Office'' appears on the user''s calendar.Otherwise, false.
     */
    private ?bool $isOutOfOffice;

    /**
     * The out-of-office message configured by the user in the Outlook client (Automatic replies) or the Teams client (Schedule out of office).
     */
    private ?string $message;


    public function getIsOutOfOffice(): ?bool
    {
        return $this->isOutOfOffice;
    }

    public function setIsOutOfOffice(?bool $isOutOfOffice): self
    {
        $this->isOutOfOffice = $isOutOfOffice;
        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

}
