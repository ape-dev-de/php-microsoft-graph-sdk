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
     * @var string[]
     */
    private array $accountTargetEmails = [];


    /**
     * @return string[]
     */
    public function getAccountTargetEmails(): array
    {
        return $this->accountTargetEmails;
    }

    /**
     * @param string[] $accountTargetEmails
     */
    public function setAccountTargetEmails(array $accountTargetEmails): self
    {
        $this->accountTargetEmails = $accountTargetEmails;
        return $this;
    }

}
