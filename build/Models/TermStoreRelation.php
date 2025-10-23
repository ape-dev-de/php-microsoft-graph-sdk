<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreRelation
 */
class TermStoreRelation
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The type of relation. Possible values are: pin, reuse.
     * @var TermStoreRelationType|\stdClass|null
     */
    public mixed $relationship = null;

    /** 
     * The from [term] of the relation. The term from which the relationship is defined. A null value would indicate the relation is directly with the [set].
     * @var TermStoreTerm|\stdClass|null
     */
    public mixed $fromTerm = null;

    /** 
     * The [set] in which the relation is relevant.
     * @var TermStoreSet|\stdClass|null
     */
    public mixed $set = null;

    /** 
     * The to [term] of the relation. The term to which the relationship is defined.
     * @var TermStoreTerm|\stdClass|null
     */
    public mixed $toTerm = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['relationship'])) {
            $this->relationship = $data['relationship'];
        }
        if (isset($data['fromTerm'])) {
            $this->fromTerm = $data['fromTerm'];
        }
        if (isset($data['set'])) {
            $this->set = $data['set'];
        }
        if (isset($data['toTerm'])) {
            $this->toTerm = $data['toTerm'];
        }
    }
}
