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
     */
    private ?string $userPrincipalNames;

    public function getUserPrincipalNames(): ?string
    {
        return $this->userPrincipalNames;
    }

    public function setUserPrincipalNames(?string $userPrincipalNames): self
    {
        $this->userPrincipalNames = $userPrincipalNames;
        return $this;
    }

}
