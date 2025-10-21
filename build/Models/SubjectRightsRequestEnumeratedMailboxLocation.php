<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestEnumeratedMailboxLocation
 */
class SubjectRightsRequestEnumeratedMailboxLocation
{
    /**
     * Collection of mailboxes that should be included in the search. Includes the user principal name (UPN) of each mailbox, for example, Monica.Thompson@contoso.com.
     * @var string[]
     */
    private array $userPrincipalNames = [];


    /**
     * @return string[]
     */
    public function getUserPrincipalNames(): array
    {
        return $this->userPrincipalNames;
    }

    /**
     * @param string[] $userPrincipalNames
     */
    public function setUserPrincipalNames(array $userPrincipalNames): self
    {
        $this->userPrincipalNames = $userPrincipalNames;
        return $this;
    }

}
