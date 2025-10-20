<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AddressBookAccountTargetContent
 */
class AddressBookAccountTargetContent
{
    /**
     * List of user emails targeted for an attack simulation training campaign.
     */
    private ?string $accountTargetEmails;

    public function getAccountTargetEmails(): ?string
    {
        return $this->accountTargetEmails;
    }

    public function setAccountTargetEmails(?string $accountTargetEmails): self
    {
        $this->accountTargetEmails = $accountTargetEmails;
        return $this;
    }

}
