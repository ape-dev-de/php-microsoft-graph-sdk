<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAlterationOptions
 */
class SearchAlterationOptions
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates whether spelling modifications are enabled. If enabled, the user gets the search results for the corrected query if there were no results for the original query with typos. The response will also include the spelling modification information in the queryAlterationResponse property. Optional. */
    public ?bool $enableModification = null;

    /** Indicates whether spelling suggestions are enabled. If enabled, the user gets the search results for the original search query and suggestions for spelling correction in the queryAlterationResponse property of the response for the typos in the query. Optional. */
    public ?bool $enableSuggestion = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['enableModification'])) {
            $this->enableModification = is_bool($data['enableModification']) ? $data['enableModification'] : (bool)$data['enableModification'];
        }
        if (isset($data['enableSuggestion'])) {
            $this->enableSuggestion = is_bool($data['enableSuggestion']) ? $data['enableSuggestion'] : (bool)$data['enableSuggestion'];
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
