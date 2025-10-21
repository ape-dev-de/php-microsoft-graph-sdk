<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScoredEmailAddress
 */
class ScoredEmailAddress
{
    /**
     * The email address.
     */
    private ?string $address;

    /**
     */
    private ?string $itemId;

    /**
     * The relevance score of the email address. A relevance score is used as a sort key, in relation to the other returned results. A higher relevance score value corresponds to a more relevant result. Relevance is determined by the user’s communication and collaboration patterns and business relationships.
     */
    private ?string $relevanceScore;

    /**
     */
    private ?string $selectionLikelihood;


    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    public function setItemId(?string $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    public function getRelevanceScore(): ?string
    {
        return $this->relevanceScore;
    }

    public function setRelevanceScore(?string $relevanceScore): self
    {
        $this->relevanceScore = $relevanceScore;
        return $this;
    }

    public function getSelectionLikelihood(): ?string
    {
        return $this->selectionLikelihood;
    }

    public function setSelectionLikelihood(?string $selectionLikelihood): self
    {
        $this->selectionLikelihood = $selectionLikelihood;
        return $this;
    }

}
