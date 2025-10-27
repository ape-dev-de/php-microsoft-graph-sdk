<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlterationResponse
 */
class AlterationResponse
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Defines the original user query string. */
    public ?string $originalQueryString = null;

    /** 
     * Defines the details of the alteration information for the spelling correction.
     * @var SearchAlteration|\stdClass|null
     */
    public mixed $queryAlteration = null;

    /** 
     * Defines the type of the spelling correction. Possible values are: suggestion, modification.
     * @var SearchAlterationType|\stdClass|null
     */
    public mixed $queryAlterationType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['originalQueryString'])) {
            $this->originalQueryString = $data['originalQueryString'];
        }
        if (isset($data['queryAlteration'])) {
            $this->queryAlteration = is_array($data['queryAlteration']) ? new SearchAlteration($data['queryAlteration']) : $data['queryAlteration'];
        }
        if (isset($data['queryAlterationType'])) {
            $this->queryAlterationType = is_array($data['queryAlterationType']) ? new SearchAlterationType($data['queryAlterationType']) : $data['queryAlterationType'];
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
