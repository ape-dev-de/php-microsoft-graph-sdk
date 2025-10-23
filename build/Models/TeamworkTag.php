<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkTag
 */
class TeamworkTag
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The description of the tag as it appears to the user in Microsoft Teams. A teamworkTag can't have more than 200 teamworkTagMembers. */
    public ?string $description = null;

    /** The name of the tag as it appears to the user in Microsoft Teams. */
    public ?string $displayName = null;

    /** The number of users assigned to the tag. */
    public ?float $memberCount = null;

    /** 
     * The type of the tag. Default is standard.
     * @var TeamworkTagType|\stdClass|null
     */
    public mixed $tagType = null;

    /** ID of the team in which the tag is defined. */
    public ?string $teamId = null;

    /** 
     * Users assigned to the tag.
     * @var TeamworkTagMember[]
     */
    public array $members = [];


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
        if (isset($data['memberCount'])) {
            $this->memberCount = $data['memberCount'];
        }
        if (isset($data['tagType'])) {
            $this->tagType = $data['tagType'];
        }
        if (isset($data['teamId'])) {
            $this->teamId = $data['teamId'];
        }
        if (isset($data['members'])) {
            $this->members = $data['members'];
        }
    }
}
