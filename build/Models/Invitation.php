<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Invitation
 */
class Invitation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The display name of the user being invited. */
    public ?string $invitedUserDisplayName = null;

    /** The email address of the user being invited. Required. The following special characters aren't permitted in the email address:Tilde (~)Exclamation point (!)Number sign (#)Dollar sign ($)Percent (%)Circumflex (^)Ampersand (&)Asterisk (*)Parentheses (( ))Plus sign (+)Equal sign (=)Brackets ([ ])Braces ({ })Backslash (/)Slash mark (/)Pipe (/|)Semicolon (;)Colon (:)Quotation marks (')Angle brackets (< >)Question mark (?)Comma (,)However, the following exceptions apply:A period (.) or a hyphen (-) is permitted anywhere in the user name, except at the beginning or end of the name.An underscore (_) is permitted anywhere in the user name, including at the beginning or end of the name. */
    public ?string $invitedUserEmailAddress = null;

    /** 
     * Contains configuration for the message being sent to the invited user, including customizing message text, language, and cc recipient list.
     * @var InvitedUserMessageInfo|\stdClass|null
     */
    public InvitedUserMessageInfo|\stdClass|null $invitedUserMessageInfo = null;

    /** The userType of the user being invited. By default, this is Guest. You can invite as Member if you're a company administrator. */
    public ?string $invitedUserType = null;

    /** The URL the user can use to redeem their invitation. Read-only. */
    public ?string $inviteRedeemUrl = null;

    /** The URL the user should be redirected to after the invitation is redeemed. Required. */
    public ?string $inviteRedirectUrl = null;

    /** Reset the user's redemption status and reinvite a user while retaining their user identifier, group memberships, and app assignments. This property allows you to enable a user to sign-in using a different email address from the one in the previous invitation. When true, the invitedUser/id relationship is required. For more information about using this property, see Reset redemption status for a guest user. */
    public ?bool $resetRedemption = null;

    /** Indicates whether an email should be sent to the user being invited. The default is false. */
    public ?bool $sendInvitationMessage = null;

    /** The status of the invitation. Possible values are: PendingAcceptance, Completed, InProgress, and Error. */
    public ?string $status = null;

    /** 
     * The user created as part of the invitation creation. Read-only. The id property is required in the request body to reset a redemption status.
     * @var User|\stdClass|null
     */
    public User|\stdClass|null $invitedUser = null;

    /** 
     * The users or groups who are sponsors of the invited user. Sponsors are users and groups that are responsible for guest users' privileges in the tenant and for keeping the guest users' information and access up to date.
     * @var DirectoryObject[]
     */
    public array $invitedUserSponsors = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['invitedUserDisplayName'])) {
            $this->invitedUserDisplayName = $data['invitedUserDisplayName'];
        }
        if (isset($data['invitedUserEmailAddress'])) {
            $this->invitedUserEmailAddress = $data['invitedUserEmailAddress'];
        }
        if (isset($data['invitedUserMessageInfo'])) {
            $this->invitedUserMessageInfo = is_array($data['invitedUserMessageInfo']) ? new InvitedUserMessageInfo($data['invitedUserMessageInfo']) : $data['invitedUserMessageInfo'];
        }
        if (isset($data['invitedUserType'])) {
            $this->invitedUserType = $data['invitedUserType'];
        }
        if (isset($data['inviteRedeemUrl'])) {
            $this->inviteRedeemUrl = $data['inviteRedeemUrl'];
        }
        if (isset($data['inviteRedirectUrl'])) {
            $this->inviteRedirectUrl = $data['inviteRedirectUrl'];
        }
        if (isset($data['resetRedemption'])) {
            $this->resetRedemption = is_bool($data['resetRedemption']) ? $data['resetRedemption'] : (bool)$data['resetRedemption'];
        }
        if (isset($data['sendInvitationMessage'])) {
            $this->sendInvitationMessage = is_bool($data['sendInvitationMessage']) ? $data['sendInvitationMessage'] : (bool)$data['sendInvitationMessage'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['invitedUser'])) {
            $this->invitedUser = is_array($data['invitedUser']) ? new User($data['invitedUser']) : $data['invitedUser'];
        }
        if (isset($data['invitedUserSponsors'])) {
            $this->invitedUserSponsors = $data['invitedUserSponsors'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
