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
     */
    private ?string $noResultProtectionUnitIds;

    /**
     * The unique identifier of the search response.
     */
    private ?string $searchResponseId;

    /**
     * Contains a collection of restore points.
     */
    private ?string $searchResults;

    public function getNoResultProtectionUnitIds(): ?string
    {
        return $this->noResultProtectionUnitIds;
    }

    public function setNoResultProtectionUnitIds(?string $noResultProtectionUnitIds): self
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

    public function getSearchResults(): ?string
    {
        return $this->searchResults;
    }

    public function setSearchResults(?string $searchResults): self
    {
        $this->searchResults = $searchResults;
        return $this;
    }

}
