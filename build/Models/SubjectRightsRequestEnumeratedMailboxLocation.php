<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestEnumeratedMailboxLocation
 */
class SubjectRightsRequestEnumeratedMailboxLocation
{
    public function __construct(
        /** @var string[] Collection of mailboxes that should be included in the search. Includes the user principal name (UPN) of each mailbox, for example, Monica.Thompson@contoso.com. */
        public array $userPrincipalNames = []
    ) {}
}
