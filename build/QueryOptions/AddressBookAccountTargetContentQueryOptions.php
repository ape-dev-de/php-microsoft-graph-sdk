<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AddressBookAccountTargetContent resources
 *
 * Available select fields:
 * - accountTargetEmails
 */
class AddressBookAccountTargetContentQueryOptions extends QueryOptions
{
    public const FIELD_ACCOUNT_TARGET_EMAILS = 'accountTargetEmails';

    /**
     * Select specific AddressBookAccountTargetContent properties
     * 
     * @param array<string> $select Use AddressBookAccountTargetContentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
