<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreRelation
 */
class TermStoreRelation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The type of relation. Possible values are: pin, reuse.
     * @var TermStoreRelationType|\stdClass|null
     */
    public TermStoreRelationType|\stdClass|null $relationship = null;

    /** 
     * The from [term] of the relation. The term from which the relationship is defined. A null value would indicate the relation is directly with the [set].
     * @var TermStoreTerm|\stdClass|null
     */
    public TermStoreTerm|\stdClass|null $fromTerm = null;

    /** 
     * The [set] in which the relation is relevant.
     * @var TermStoreSet|\stdClass|null
     */
    public TermStoreSet|\stdClass|null $set = null;

    /** 
     * The to [term] of the relation. The term to which the relationship is defined.
     * @var TermStoreTerm|\stdClass|null
     */
    public TermStoreTerm|\stdClass|null $toTerm = null;


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
        if (isset($data['relationship'])) {
            $this->relationship = is_array($data['relationship']) ? new TermStoreRelationType($data['relationship']) : $data['relationship'];
        }
        if (isset($data['fromTerm'])) {
            $this->fromTerm = is_array($data['fromTerm']) ? new TermStoreTerm($data['fromTerm']) : $data['fromTerm'];
        }
        if (isset($data['set'])) {
            $this->set = is_array($data['set']) ? new TermStoreSet($data['set']) : $data['set'];
        }
        if (isset($data['toTerm'])) {
            $this->toTerm = is_array($data['toTerm']) ? new TermStoreTerm($data['toTerm']) : $data['toTerm'];
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
