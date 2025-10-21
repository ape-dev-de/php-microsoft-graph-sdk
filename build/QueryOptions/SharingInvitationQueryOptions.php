<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharingInvitation resources
 *
 * Available select fields:
 * - email
 * - invitedBy
 * - redeemedBy
 * - signInRequired
 */
class SharingInvitationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharingInvitation
     */
    public const FIELD_EMAIL = 'email';
    public const FIELD_INVITED_BY = 'invitedBy';
    public const FIELD_REDEEMED_BY = 'redeemedBy';
    public const FIELD_SIGN_IN_REQUIRED = 'signInRequired';

    /**
     * Select specific SharingInvitation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
