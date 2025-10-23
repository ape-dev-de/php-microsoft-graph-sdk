<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScoredEmailAddress
 */
class ScoredEmailAddress
{
    /** The email address. */
    public ?string $address = null;

    /**  */
    public ?string $itemId = null;

    /** The relevance score of the email address. A relevance score is used as a sort key, in relation to the other returned results. A higher relevance score value corresponds to a more relevant result. Relevance is determined by the user’s communication and collaboration patterns and business relationships. */
    public ?string $relevanceScore = null;

    /** 
     * 
     * @var SelectionLikelihoodInfo|\stdClass|null
     */
    public mixed $selectionLikelihood = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['address'])) {
            $this->address = $data['address'];
        }
        if (isset($data['itemId'])) {
            $this->itemId = $data['itemId'];
        }
        if (isset($data['relevanceScore'])) {
            $this->relevanceScore = $data['relevanceScore'];
        }
        if (isset($data['selectionLikelihood'])) {
            $this->selectionLikelihood = $data['selectionLikelihood'];
        }
    }
}
