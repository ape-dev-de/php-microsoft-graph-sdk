<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestorePointSearchResponse
 */
class RestorePointSearchResponse
{
    /** 
     * Contains  alist of protection units with no restore points.
     * @var string[]
     */
    public array $noResultProtectionUnitIds = [];

    /** The unique identifier of the search response. */
    public ?string $searchResponseId = null;

    /** 
     * Contains a collection of restore points.
     * @var RestorePointSearchResult[]
     */
    public array $searchResults = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['noResultProtectionUnitIds'])) {
            $this->noResultProtectionUnitIds = $data['noResultProtectionUnitIds'];
        }
        if (isset($data['searchResponseId'])) {
            $this->searchResponseId = $data['searchResponseId'];
        }
        if (isset($data['searchResults'])) {
            $this->searchResults = $data['searchResults'];
        }
    }
}
