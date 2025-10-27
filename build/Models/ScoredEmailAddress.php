<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScoredEmailAddress
 */
class ScoredEmailAddress
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The email address. */
    public ?string $address = null;

    /**  */
    public ?string $itemId = null;

    /** 
     * The relevance score of the email address. A relevance score is used as a sort key, in relation to the other returned results. A higher relevance score value corresponds to a more relevant result. Relevance is determined by the user’s communication and collaboration patterns and business relationships.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $relevanceScore = null;

    /** 
     * 
     * @var SelectionLikelihoodInfo|\stdClass|null
     */
    public SelectionLikelihoodInfo|\stdClass|null $selectionLikelihood = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['address'])) {
            $this->address = $data['address'];
        }
        if (isset($data['itemId'])) {
            $this->itemId = $data['itemId'];
        }
        if (isset($data['relevanceScore'])) {
            $this->relevanceScore = is_numeric($data['relevanceScore']) ? (float)$data['relevanceScore'] : $data['relevanceScore'];
        }
        if (isset($data['selectionLikelihood'])) {
            $this->selectionLikelihood = is_array($data['selectionLikelihood']) ? new SelectionLikelihoodInfo($data['selectionLikelihood']) : $data['selectionLikelihood'];
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
