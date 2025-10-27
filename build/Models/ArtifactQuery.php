<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ArtifactQuery
 */
class ArtifactQuery
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The type of artifact to search. The possible values are: message, unknownFutureValue.
     * @var RestorableArtifact|\stdClass|null
     */
    public RestorableArtifact|\stdClass|null $artifactType = null;

    /** Specifies criteria to retrieve artifacts. */
    public ?string $queryExpression = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['artifactType'])) {
            $this->artifactType = is_array($data['artifactType']) ? new RestorableArtifact($data['artifactType']) : $data['artifactType'];
        }
        if (isset($data['queryExpression'])) {
            $this->queryExpression = $data['queryExpression'];
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
