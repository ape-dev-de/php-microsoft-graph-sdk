<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Collection response for MeetingChatMode
 * 
 * Implements ArrayAccess, Countable, and IteratorAggregate for array-like behavior
 */
class MeetingChatModeCollectionResponse implements \ArrayAccess, \Countable, \IteratorAggregate
{
    /**
     * @var MeetingChatMode[]
     */
    private array $value = [];

    private ?string $odataNextLink = null;
    private ?int $odataCount = null;

    /**
     * Get the collection items
     * 
     * @return MeetingChatMode[]
     */
    public function getValue(): array
    {
        return $this->value;
    }

    /**
     * Set the collection items
     * 
     * @param MeetingChatMode[] $items
     * @return self
     */
    public function setValue(array|MeetingChatMode $items, MeetingChatMode ...$moreItems): self
    {
        if (is_array($items)) {
            // Called with array (e.g., from deserializer)
            $this->value = $items;
        } else {
           // Called with variadic parameters
            $this->value = array_merge([$items], $moreItems);
        }
        return $this;
    }

    /**
     * Set the collection items from array (for deserialization)
     * 
     * @param array<MeetingChatMode> $value
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
     * @param MeetingChatMode $item
     * @return self
     */
    public function addValue(MeetingChatMode $item): self
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
     * Check if the collection is empty
     * 
     * @return bool
     */
    public function isEmpty(): bool
    {
        return empty($this->value);
    }

    // ========================================================================
    // ArrayAccess Implementation
    // ========================================================================

    /**
     * Check if offset exists
     * 
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->value[$offset]);
    }

    /**
     * Get value at offset
     * 
     * @param mixed $offset
     * @return MeetingChatMode|null
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->value[$offset] ?? null;
    }

    /**
     * Set value at offset
     * 
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if ($offset === null) {
            $this->value[] = $value;
        } else {
            $this->value[$offset] = $value;
        }
    }

    /**
     * Unset value at offset
     * 
     * @param mixed $offset
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->value[$offset]);
    }

    // ========================================================================
    // Countable Implementation
    // ========================================================================

    /**
     * Count elements (Countable interface)
     * 
     * Note: This returns the count of items in the current page,
     * use getOdataCount() for the total count across all pages
     * 
     * @return int
     */
    #[\ReturnTypeWillChange]
    public function count(): int
    {
        return count($this->value);
    }

    // ========================================================================
    // IteratorAggregate Implementation
    // ========================================================================

    /**
     * Get iterator for foreach loops
     * 
     * @return \ArrayIterator<int, MeetingChatMode>
     */
    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator($this->value);
    }
}
