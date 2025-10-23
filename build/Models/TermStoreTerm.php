<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreTerm
 */
class TermStoreTerm
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time of term creation. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Description about term that is dependent on the languageTag.
     * @var TermStoreLocalizedDescription[]
     */
    public array $descriptions = [];

    /** 
     * Label metadata for a term.
     * @var TermStoreLocalizedLabel[]
     */
    public array $labels = [];

    /** Last date and time of term modification. Read-only. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * Collection of properties on the term.
     * @var KeyValue[]
     */
    public array $properties = [];

    /** 
     * Children of current term.
     * @var TermStoreTerm[]
     */
    public array $children = [];

    /** 
     * To indicate which terms are related to the current term as either pinned or reused.
     * @var TermStoreRelation[]
     */
    public array $relations = [];

    /** 
     * The [set] in which the term is created.
     * @var TermStoreSet|\stdClass|null
     */
    public mixed $set = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['descriptions'])) {
            $this->descriptions = $data['descriptions'];
        }
        if (isset($data['labels'])) {
            $this->labels = $data['labels'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['properties'])) {
            $this->properties = $data['properties'];
        }
        if (isset($data['children'])) {
            $this->children = $data['children'];
        }
        if (isset($data['relations'])) {
            $this->relations = $data['relations'];
        }
        if (isset($data['set'])) {
            $this->set = $data['set'];
        }
    }
}
