<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Community
 */
class Community
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The description of the community. The maximum length is 1,024 characters. */
    public ?string $description = null;

    /** The name of the community. The maximum length is 255 characters. */
    public ?string $displayName = null;

    /** The ID of the Microsoft 365 group that manages the membership of this community. */
    public ?string $groupId = null;

    /**  */
    public ?CommunityPrivacy $privacy = null;

    /** 
     * The Microsoft 365 group that manages the membership of this community.
     * @var Group|\stdClass|null
     */
    public mixed $group = null;

    /** 
     * The admins of the community. Limited to 100 users. If this property isn't specified when you create the community, the calling user is automatically assigned as the community owner.
     * @var User[]
     */
    public array $owners = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['groupId'])) {
            $this->groupId = $data['groupId'];
        }
        if (isset($data['privacy'])) {
            $this->privacy = is_array($data['privacy']) ? new CommunityPrivacy($data['privacy']) : $data['privacy'];
        }
        if (isset($data['group'])) {
            $this->group = is_array($data['group']) ? new Group($data['group']) : $data['group'];
        }
        if (isset($data['owners'])) {
            $this->owners = $data['owners'];
        }
    }
}
