<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SkypeForBusinessUserConversationMember
 */
class SkypeForBusinessUserConversationMember
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The display name of the user. */
    public ?string $displayName = null;

    /** 
     * The roles for that user. This property contains more qualifiers only when relevant - for example, if the member has owner privileges, the roles property contains owner as one of the values. Similarly, if the member is an in-tenant guest, the roles property contains guest as one of the values. A basic member shouldn't have any values specified in the roles property. An Out-of-tenant external member is assigned the owner role.
     * @var string[]
     */
    public array $roles = [];

    /** The timestamp denoting how far back a conversation's history is shared with the conversation member. This property is settable only for members of a chat. */
    public ?\DateTimeInterface $visibleHistoryStartDateTime = null;

    /** ID of the tenant that the user belongs to. */
    public ?string $tenantId = null;

    /** Microsoft Entra ID of the user. */
    public ?string $userId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['roles'])) {
            $this->roles = $data['roles'];
        }
        if (isset($data['visibleHistoryStartDateTime'])) {
            $this->visibleHistoryStartDateTime = is_string($data['visibleHistoryStartDateTime']) ? new \DateTimeImmutable($data['visibleHistoryStartDateTime']) : $data['visibleHistoryStartDateTime'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
    }
}
