<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ListModel
 */
class ListModel
{
    /**
     * The displayable title of the list.
     */
    private ?string $displayName;

    /**
     * Contains more details about the list.
     */
    private ?string $list;

    /**
     * Returns identifiers useful for SharePoint REST compatibility. Read-only.
     */
    private ?string $sharepointIds;

    /**
     * If present, indicates that the list is system-managed. Read-only.
     */
    private ?string $system;

    /**
     * The collection of field definitions for this list.
     */
    private array $columns = [];

    /**
     * The collection of content types present in this list.
     */
    private array $contentTypes = [];

    /**
     * Allows access to the list as a drive resource with driveItems. Only present on document libraries.
     */
    private ?string $drive;

    /**
     * All items contained in the list.
     */
    private array $items = [];

    /**
     * The collection of long-running operations on the list.
     */
    private array $operations = [];

    /**
     * The set of subscriptions on the list.
     * @var string[]
     */
    private array $subscriptions = [];


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getList(): ?string
    {
        return $this->list;
    }

    public function setList(?string $list): self
    {
        $this->list = $list;
        return $this;
    }

    public function getSharepointIds(): ?string
    {
        return $this->sharepointIds;
    }

    public function setSharepointIds(?string $sharepointIds): self
    {
        $this->sharepointIds = $sharepointIds;
        return $this;
    }

    public function getSystem(): ?string
    {
        return $this->system;
    }

    public function setSystem(?string $system): self
    {
        $this->system = $system;
        return $this;
    }

    public function getColumns(): array
    {
        return $this->columns;
    }

    public function setColumns(array $columns): self
    {
        $this->columns = $columns;
        return $this;
    }

    public function getContentTypes(): array
    {
        return $this->contentTypes;
    }

    public function setContentTypes(array $contentTypes): self
    {
        $this->contentTypes = $contentTypes;
        return $this;
    }

    public function getDrive(): ?string
    {
        return $this->drive;
    }

    public function setDrive(?string $drive): self
    {
        $this->drive = $drive;
        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }

    public function getOperations(): array
    {
        return $this->operations;
    }

    public function setOperations(array $operations): self
    {
        $this->operations = $operations;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSubscriptions(): array
    {
        return $this->subscriptions;
    }

    /**
     * @param string[] $subscriptions
     */
    public function setSubscriptions(array $subscriptions): self
    {
        $this->subscriptions = $subscriptions;
        return $this;
    }

}
