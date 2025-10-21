<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedDriveItem
 */
class SharedDriveItem
{
    /**
     * Information about the owner of the shared item being referenced.
     */
    private ?string $owner;

    /**
     * Used to access the underlying driveItem
     */
    private ?string $driveItem;

    /**
     * All driveItems contained in the sharing root. This collection cannot be enumerated.
     */
    private array $items = [];

    /**
     * Used to access the underlying list
     */
    private ?string $list;

    /**
     * Used to access the underlying listItem
     */
    private ?string $listItem;

    /**
     * Used to access the permission representing the underlying sharing link
     */
    private ?string $permission;

    /**
     * Used to access the underlying driveItem. Deprecated -- use driveItem instead.
     */
    private ?string $root;

    /**
     * Used to access the underlying site
     */
    private ?string $site;


    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(?string $owner): self
    {
        $this->owner = $owner;
        return $this;
    }

    public function getDriveItem(): ?string
    {
        return $this->driveItem;
    }

    public function setDriveItem(?string $driveItem): self
    {
        $this->driveItem = $driveItem;
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

    public function getList(): ?string
    {
        return $this->list;
    }

    public function setList(?string $list): self
    {
        $this->list = $list;
        return $this;
    }

    public function getListItem(): ?string
    {
        return $this->listItem;
    }

    public function setListItem(?string $listItem): self
    {
        $this->listItem = $listItem;
        return $this;
    }

    public function getPermission(): ?string
    {
        return $this->permission;
    }

    public function setPermission(?string $permission): self
    {
        $this->permission = $permission;
        return $this;
    }

    public function getRoot(): ?string
    {
        return $this->root;
    }

    public function setRoot(?string $root): self
    {
        $this->root = $root;
        return $this;
    }

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(?string $site): self
    {
        $this->site = $site;
        return $this;
    }

}
