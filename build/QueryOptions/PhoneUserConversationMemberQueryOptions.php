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
    /**
     * Available select fields for PhoneUserConversationMember
     */
    public const FIELD_PHONE_NUMBER = 'phoneNumber';

    /**
     * Select specific PhoneUserConversationMember properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
