<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AddressBookAccountTargetContent
 */
class AddressBookAccountTargetContent
{
    public function __construct(
        /** The type of account target content. Possible values are: unknown, includeAll, addressBook, unknownFutureValue. */
        public ?string $type = null,
        /** @var string[] List of user emails targeted for an attack simulation training campaign. */
        public array $accountTargetEmails = []
    ) {}
}
