<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamMemberSettings
 */
class TeamMemberSettings
{
    /**
     * If set to true, members can add and remove apps.
     */
    private ?bool $allowAddRemoveApps;

    /**
     * If set to true, members can add and update private channels.
     */
    private ?bool $allowCreatePrivateChannels;

    /**
     * If set to true, members can add and update channels.
     */
    private ?bool $allowCreateUpdateChannels;

    /**
     * If set to true, members can add, update, and remove connectors.
     */
    private ?bool $allowCreateUpdateRemoveConnectors;

    /**
     * If set to true, members can add, update, and remove tabs.
     */
    private ?bool $allowCreateUpdateRemoveTabs;

    /**
     * If set to true, members can delete channels.
     */
    private ?string $allowDeleteChannels;

    public function getAllowAddRemoveApps(): ?bool
    {
        return $this->allowAddRemoveApps;
    }

    public function setAllowAddRemoveApps(?bool $allowAddRemoveApps): self
    {
        $this->allowAddRemoveApps = $allowAddRemoveApps;
        return $this;
    }

    public function getAllowCreatePrivateChannels(): ?bool
    {
        return $this->allowCreatePrivateChannels;
    }

    public function setAllowCreatePrivateChannels(?bool $allowCreatePrivateChannels): self
    {
        $this->allowCreatePrivateChannels = $allowCreatePrivateChannels;
        return $this;
    }

    public function getAllowCreateUpdateChannels(): ?bool
    {
        return $this->allowCreateUpdateChannels;
    }

    public function setAllowCreateUpdateChannels(?bool $allowCreateUpdateChannels): self
    {
        $this->allowCreateUpdateChannels = $allowCreateUpdateChannels;
        return $this;
    }

    public function getAllowCreateUpdateRemoveConnectors(): ?bool
    {
        return $this->allowCreateUpdateRemoveConnectors;
    }

    public function setAllowCreateUpdateRemoveConnectors(?bool $allowCreateUpdateRemoveConnectors): self
    {
        $this->allowCreateUpdateRemoveConnectors = $allowCreateUpdateRemoveConnectors;
        return $this;
    }

    public function getAllowCreateUpdateRemoveTabs(): ?bool
    {
        return $this->allowCreateUpdateRemoveTabs;
    }

    public function setAllowCreateUpdateRemoveTabs(?bool $allowCreateUpdateRemoveTabs): self
    {
        $this->allowCreateUpdateRemoveTabs = $allowCreateUpdateRemoveTabs;
        return $this;
    }

    public function getAllowDeleteChannels(): ?string
    {
        return $this->allowDeleteChannels;
    }

    public function setAllowDeleteChannels(?string $allowDeleteChannels): self
    {
        $this->allowDeleteChannels = $allowDeleteChannels;
        return $this;
    }

}
