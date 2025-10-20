<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PhoneUserConversationMember resources
 *
 * Available select fields:
 * - phoneNumber
 */
class PhoneUserConversationMemberQueryOptions extends QueryOptions
{
    public const FIELD_PHONE_NUMBER = 'phoneNumber';

    /**
     * Select specific PhoneUserConversationMember properties
     * 
     * @param array<string> $select Use PhoneUserConversationMemberQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
