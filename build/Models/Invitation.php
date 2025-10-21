<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Invitation
 */
class Invitation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The display name of the user being invited. */
        public ?string $invitedUserDisplayName = null,
        /** The email address of the user being invited. Required. The following special characters aren't permitted in the email address:Tilde (~)Exclamation point (!)Number sign (#)Dollar sign ($)Percent (%)Circumflex (^)Ampersand (&)Asterisk (*)Parentheses (( ))Plus sign (+)Equal sign (=)Brackets ([ ])Braces ({ })Backslash (/)Slash mark (/)Pipe (/|)Semicolon (;)Colon (:)Quotation marks (')Angle brackets (< >)Question mark (?)Comma (,)However, the following exceptions apply:A period (.) or a hyphen (-) is permitted anywhere in the user name, except at the beginning or end of the name.An underscore (_) is permitted anywhere in the user name, including at the beginning or end of the name. */
        public ?string $invitedUserEmailAddress = null,
        /** Contains configuration for the message being sent to the invited user, including customizing message text, language, and cc recipient list. */
        public ?InvitedUserMessageInfo $invitedUserMessageInfo = null,
        /** The userType of the user being invited. By default, this is Guest. You can invite as Member if you're a company administrator. */
        public ?string $invitedUserType = null,
        /** The URL the user can use to redeem their invitation. Read-only. */
        public ?string $inviteRedeemUrl = null,
        /** The URL the user should be redirected to after the invitation is redeemed. Required. */
        public ?string $inviteRedirectUrl = null,
        /** Reset the user's redemption status and reinvite a user while retaining their user identifier, group memberships, and app assignments. This property allows you to enable a user to sign-in using a different email address from the one in the previous invitation. When true, the invitedUser/id relationship is required. For more information about using this property, see Reset redemption status for a guest user. */
        public ?bool $resetRedemption = null,
        /** Indicates whether an email should be sent to the user being invited. The default is false. */
        public ?bool $sendInvitationMessage = null,
        /** The status of the invitation. Possible values are: PendingAcceptance, Completed, InProgress, and Error. */
        public ?string $status = null,
        /** The user created as part of the invitation creation. Read-only. The id property is required in the request body to reset a redemption status. */
        public ?User $invitedUser = null,
        /** The users or groups who are sponsors of the invited user. Sponsors are users and groups that are responsible for guest users' privileges in the tenant and for keeping the guest users' information and access up to date. */
        public array $invitedUserSponsors = []
    ) {}
}
