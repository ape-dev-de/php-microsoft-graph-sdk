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
    public const FIELD_EMAIL = 'email';
    public const FIELD_INVITED_BY = 'invitedBy';
    public const FIELD_REDEEMED_BY = 'redeemedBy';
    public const FIELD_SIGN_IN_REQUIRED = 'signInRequired';

    /**
     * Select specific SharingInvitation properties
     * 
     * @param array<string> $select Use SharingInvitationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
