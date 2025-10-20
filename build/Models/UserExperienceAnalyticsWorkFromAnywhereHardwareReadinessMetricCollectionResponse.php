<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Collection response for UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
 */
class UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricCollectionResponse
{
    /**
     * @var UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric[]
     */
    private array $value = [];

    private ?string $odataNextLink = null;
    private ?int $odataCount = null;

    /**
     * Get the collection items
     * 
     * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric[]
     */
    public function getValue(): array
    {
        return $this->value;
    }

    /**
     * Set the collection items (type-safe with variadic parameters)
     * 
     * @param UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric ...$items Variable number of UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric items
     * @return self
     */
    public function setValue(UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric ...$items): self
    {
        $this->value = $items;
        return $this;
    }

    /**
     * Set the collection items from array (for deserialization)
     * 
     * @param array<UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric> $value
     * @return self
     * @internal Used by deserializer
     */
    public function setValueFromArray(array $value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Add a single item to the collection
     * 
     * @param UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric $item
     * @return self
     */
    public function addValue(UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric $item): self
    {
        $this->value[] = $item;
        return $this;
    }

    /**
     * Get the next link for pagination
     * 
     * @return string|null
     */
    public function getOdataNextLink(): ?string
    {
        return $this->odataNextLink;
    }

    /**
     * Set the next link for pagination
     * 
     * @param string|null $odataNextLink
     * @return self
     */
    public function setOdataNextLink(?string $odataNextLink): self
    {
        $this->odataNextLink = $odataNextLink;
        return $this;
    }

    /**
     * Get the total count of items
     * 
     * @return int|null
     */
    public function getOdataCount(): ?int
    {
        return $this->odataCount;
    }

    /**
     * Set the total count of items
     * 
     * @param int|null $odataCount
     * @return self
     */
    public function setOdataCount(?int $odataCount): self
    {
        $this->odataCount = $odataCount;
        return $this;
    }

    /**
     * Check if there are more results available
     * 
     * @return bool
     */
    public function hasMore(): bool
    {
        return $this->odataNextLink !== null;
    }

    /**
     * Get the number of items in the current page
     * 
     * @return int
     */
    public function count(): int
    {
        return count($this->value);
    }

    /**
     * Check if the collection is empty
     * 
     * @return bool
     */
    public function isEmpty(): bool
    {
        return empty($this->value);
    }
}
