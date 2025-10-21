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
    private array $noResultProtectionUnitIds = [];

    /**
     * The unique identifier of the search response.
     */
    private ?string $searchResponseId;

    /**
     * Contains a collection of restore points.
     * @var string[]
     */
    private array $searchResults = [];


    /**
     * @return string[]
     */
    public function getNoResultProtectionUnitIds(): array
    {
        return $this->noResultProtectionUnitIds;
    }

    /**
     * @param string[] $noResultProtectionUnitIds
     */
    public function setNoResultProtectionUnitIds(array $noResultProtectionUnitIds): self
    {
        $this->noResultProtectionUnitIds = $noResultProtectionUnitIds;
        return $this;
    }

    public function getSearchResponseId(): ?string
    {
        return $this->searchResponseId;
    }

    public function setSearchResponseId(?string $searchResponseId): self
    {
        $this->searchResponseId = $searchResponseId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSearchResults(): array
    {
        return $this->searchResults;
    }

    /**
     * @param string[] $searchResults
     */
    public function setSearchResults(array $searchResults): self
    {
        $this->searchResults = $searchResults;
        return $this;
    }

}
