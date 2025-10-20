<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Invitation resources
 *
 * Available select fields:
 * - invitedUserDisplayName
 * - invitedUserEmailAddress
 * - invitedUserMessageInfo
 * - invitedUserType
 * - inviteRedeemUrl
 * - inviteRedirectUrl
 * - resetRedemption
 * - sendInvitationMessage
 * - status
 * - invitedUser
 * - invitedUserSponsors
 */
class InvitationQueryOptions extends QueryOptions
{
    public const FIELD_INVITED_USER_DISPLAY_NAME = 'invitedUserDisplayName';
    public const FIELD_INVITED_USER_EMAIL_ADDRESS = 'invitedUserEmailAddress';
    public const FIELD_INVITED_USER_MESSAGE_INFO = 'invitedUserMessageInfo';
    public const FIELD_INVITED_USER_TYPE = 'invitedUserType';
    public const FIELD_INVITE_REDEEM_URL = 'inviteRedeemUrl';
    public const FIELD_INVITE_REDIRECT_URL = 'inviteRedirectUrl';
    public const FIELD_RESET_REDEMPTION = 'resetRedemption';
    public const FIELD_SEND_INVITATION_MESSAGE = 'sendInvitationMessage';
    public const FIELD_STATUS = 'status';
    public const FIELD_INVITED_USER = 'invitedUser';
    public const FIELD_INVITED_USER_SPONSORS = 'invitedUserSponsors';

    /**
     * Select specific Invitation properties
     * 
     * @param array<string> $select Use InvitationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
