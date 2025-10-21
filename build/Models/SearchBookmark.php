<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchBookmark
 */
class SearchBookmark
{
    /**
     * Date and time when the bookmark stops appearing as a search result. Set as null for always available. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $availabilityEndDateTime;

    /**
     * Date and time when the bookmark starts to appear as a search result. Set as null for always available. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $availabilityStartDateTime;

    /**
     * Categories commonly used to describe this bookmark. For example, IT and HR.
     * @var string[]
     */
    private array $categories = [];

    /**
     * The list of security groups that are able to view this bookmark.
     * @var string[]
     */
    private array $groupIds = [];

    /**
     * True if this bookmark was suggested to the admin, by a user, or was mined and suggested by Microsoft. Read-only.
     */
    private ?bool $isSuggested;

    /**
     * Keywords that trigger this bookmark to appear in search results.
     */
    private ?string $keywords;

    /**
     * A list of geographically specific language names in which this bookmark can be viewed. Each language tag value follows the pattern {language}-{region}. For example, en-us is English as used in the United States. For the list of possible values, see Supported language tags.
     * @var string[]
     */
    private array $languageTags = [];

    /**
     * List of devices and operating systems that are able to view this bookmark. Possible values are: android, androidForWork, ios, macOS, windowsPhone81, windowsPhone81AndLater, windows10AndLater, androidWorkProfile, unknown, androidASOP, androidMobileApplicationManagement, iOSMobileApplicationManagement, unknownFutureValue.
     */
    private array $platforms = [];

    /**
     * List of Power Apps associated with this bookmark. If users add existing Power Apps to a bookmark, they can complete tasks directly on the search results page, such as entering vacation time or reporting expenses.
     * @var string[]
     */
    private array $powerAppIds = [];

    /**
     */
    private ?string $state;

    /**
     * Variations of a bookmark for different countries/regions or devices. Use when you need to show different content to users based on their device, country/region, or both. The date and group settings apply to all variations.
     * @var string[]
     */
    private array $targetedVariations = [];


    public function getAvailabilityEndDateTime(): ?\DateTimeInterface
    {
        return $this->availabilityEndDateTime;
    }

    public function setAvailabilityEndDateTime(?\DateTimeInterface $availabilityEndDateTime): self
    {
        $this->availabilityEndDateTime = $availabilityEndDateTime;
        return $this;
    }

    public function getAvailabilityStartDateTime(): ?\DateTimeInterface
    {
        return $this->availabilityStartDateTime;
    }

    public function setAvailabilityStartDateTime(?\DateTimeInterface $availabilityStartDateTime): self
    {
        $this->availabilityStartDateTime = $availabilityStartDateTime;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @param string[] $categories
     */
    public function setCategories(array $categories): self
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getGroupIds(): array
    {
        return $this->groupIds;
    }

    /**
     * @param string[] $groupIds
     */
    public function setGroupIds(array $groupIds): self
    {
        $this->groupIds = $groupIds;
        return $this;
    }

    public function getIsSuggested(): ?bool
    {
        return $this->isSuggested;
    }

    public function setIsSuggested(?bool $isSuggested): self
    {
        $this->isSuggested = $isSuggested;
        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(?string $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getLanguageTags(): array
    {
        return $this->languageTags;
    }

    /**
     * @param string[] $languageTags
     */
    public function setLanguageTags(array $languageTags): self
    {
        $this->languageTags = $languageTags;
        return $this;
    }

    public function getPlatforms(): array
    {
        return $this->platforms;
    }

    public function setPlatforms(array $platforms): self
    {
        $this->platforms = $platforms;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPowerAppIds(): array
    {
        return $this->powerAppIds;
    }

    /**
     * @param string[] $powerAppIds
     */
    public function setPowerAppIds(array $powerAppIds): self
    {
        $this->powerAppIds = $powerAppIds;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTargetedVariations(): array
    {
        return $this->targetedVariations;
    }

    /**
     * @param string[] $targetedVariations
     */
    public function setTargetedVariations(array $targetedVariations): self
    {
        $this->targetedVariations = $targetedVariations;
        return $this;
    }

}
