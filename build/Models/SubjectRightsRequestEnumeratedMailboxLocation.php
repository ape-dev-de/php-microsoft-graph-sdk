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
    public array $userPrincipalNames = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['userPrincipalNames'])) {
            $this->userPrincipalNames = $data['userPrincipalNames'];
        }
    }
}
