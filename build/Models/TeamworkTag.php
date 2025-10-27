<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkTag
 */
class TeamworkTag
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
    public TeamworkTagType|\stdClass|null $tagType = null;

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
        $this->rawData = $data;
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
            $this->memberCount = is_numeric($data['memberCount']) ? (float)$data['memberCount'] : $data['memberCount'];
        }
        if (isset($data['tagType'])) {
            $this->tagType = is_string($data['tagType']) ? TeamworkTagType::tryFrom($data['tagType']) : $data['tagType'];
        }
        if (isset($data['teamId'])) {
            $this->teamId = $data['teamId'];
        }
        if (isset($data['members'])) {
            $this->members = $data['members'];
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
