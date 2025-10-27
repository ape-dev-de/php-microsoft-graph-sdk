<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreSet
 */
class TermStoreSet
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time of set creation. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Description that gives details on the term usage. */
    public ?string $description = null;

    /** 
     * Name of the set for each languageTag.
     * @var TermStoreLocalizedName[]
     */
    public array $localizedNames = [];

    /** 
     * Custom properties for the set.
     * @var KeyValue[]
     */
    public array $properties = [];

    /** 
     * Children terms of set in term [store].
     * @var TermStoreTerm[]
     */
    public array $children = [];

    /**  */
    public ?TermStoreGroup $parentGroup = null;

    /** 
     * Indicates which terms have been pinned or reused directly under the set.
     * @var TermStoreRelation[]
     */
    public array $relations = [];

    /** 
     * All the terms under the set.
     * @var TermStoreTerm[]
     */
    public array $terms = [];


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
        if (isset($data['localizedNames'])) {
            $this->localizedNames = $data['localizedNames'];
        }
        if (isset($data['properties'])) {
            $this->properties = $data['properties'];
        }
        if (isset($data['children'])) {
            $this->children = $data['children'];
        }
        if (isset($data['parentGroup'])) {
            $this->parentGroup = is_array($data['parentGroup']) ? new TermStoreGroup($data['parentGroup']) : $data['parentGroup'];
        }
        if (isset($data['relations'])) {
            $this->relations = $data['relations'];
        }
        if (isset($data['terms'])) {
            $this->terms = $data['terms'];
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
