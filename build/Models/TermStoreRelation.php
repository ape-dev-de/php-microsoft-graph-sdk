<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreRelation
 */
class TermStoreRelation
{
    /**
     * The type of relation. Possible values are: pin, reuse.
     */
    private ?string $relationship;

    /**
     * The from [term] of the relation. The term from which the relationship is defined. A null value would indicate the relation is directly with the [set].
     */
    private ?string $fromTerm;

    /**
     * The [set] in which the relation is relevant.
     */
    private ?string $set;

    /**
     * The to [term] of the relation. The term to which the relationship is defined.
     */
    private ?string $toTerm;

    public function getRelationship(): ?string
    {
        return $this->relationship;
    }

    public function setRelationship(?string $relationship): self
    {
        $this->relationship = $relationship;
        return $this;
    }

    public function getFromTerm(): ?string
    {
        return $this->fromTerm;
    }

    public function setFromTerm(?string $fromTerm): self
    {
        $this->fromTerm = $fromTerm;
        return $this;
    }

    public function getSet(): ?string
    {
        return $this->set;
    }

    public function setSet(?string $set): self
    {
        $this->set = $set;
        return $this;
    }

    public function getToTerm(): ?string
    {
        return $this->toTerm;
    }

    public function setToTerm(?string $toTerm): self
    {
        $this->toTerm = $toTerm;
        return $this;
    }

}
