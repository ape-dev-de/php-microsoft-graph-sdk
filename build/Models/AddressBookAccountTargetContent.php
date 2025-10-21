<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AddressBookAccountTargetContent
 */
class AddressBookAccountTargetContent
{
    public function __construct(
        /** @var string[] List of user emails targeted for an attack simulation training campaign. */
        public array $accountTargetEmails = []
    ) {}
}
