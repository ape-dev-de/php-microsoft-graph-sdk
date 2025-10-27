<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreGroup
 */
class TermStoreGroup
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time of the group creation. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Description that gives details on the term usage. */
    public ?string $description = null;

    /** Name of the group. */
    public ?string $displayName = null;

    /** ID of the parent site of this group. */
    public ?string $parentSiteId = null;

    /** 
     * Returns the type of the group. Possible values are: global, system, and siteCollection.
     * @var TermStoreTermGroupScope|\stdClass|null
     */
    public mixed $scope = null;

    /** 
     * All sets under the group in a term [store].
     * @var TermStoreSet[]
     */
    public array $sets = [];


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
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['parentSiteId'])) {
            $this->parentSiteId = $data['parentSiteId'];
        }
        if (isset($data['scope'])) {
            $this->scope = is_array($data['scope']) ? new TermStoreTermGroupScope($data['scope']) : $data['scope'];
        }
        if (isset($data['sets'])) {
            $this->sets = $data['sets'];
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
