<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSettings
 */
class UserSettings
{
    /**
     * Reflects the organization level setting controlling delegate access to the trending API. When set to true, the organization doesn''t have access to Office Delve. The relevancy of the content displayed in Microsoft 365, for example in Suggested sites in SharePoint Home and the Discover view in OneDrive for work or school is affected for the whole organization. This setting is read-only and can only be changed by administrators in the SharePoint admin center.
     */
    private ?bool $contributionToContentDiscoveryAsOrganizationDisabled;

    /**
     * When set to true, the delegate access to the user''s trending API is disabled. When set to true, documents in the user''s Office Delve are disabled. When set to true, the relevancy of the content displayed in Microsoft 365, for example in Suggested sites in SharePoint Home and the Discover view in OneDrive for work or school is affected. Users can control this setting in Office Delve.
     */
    private ?bool $contributionToContentDiscoveryDisabled;

    /**
     * The user''s settings for the visibility of meeting hour insights, and insights derived between a user and other items in Microsoft 365, such as documents or sites. Get userInsightsSettings through this navigation property.
     */
    private ?string $itemInsights;

    /**
     */
    private ?string $shiftPreferences;

    /**
     */
    private ?string $storage;

    /**
     */
    private ?string $windows;

    public function getContributionToContentDiscoveryAsOrganizationDisabled(): ?bool
    {
        return $this->contributionToContentDiscoveryAsOrganizationDisabled;
    }

    public function setContributionToContentDiscoveryAsOrganizationDisabled(?bool $contributionToContentDiscoveryAsOrganizationDisabled): self
    {
        $this->contributionToContentDiscoveryAsOrganizationDisabled = $contributionToContentDiscoveryAsOrganizationDisabled;
        return $this;
    }

    public function getContributionToContentDiscoveryDisabled(): ?bool
    {
        return $this->contributionToContentDiscoveryDisabled;
    }

    public function setContributionToContentDiscoveryDisabled(?bool $contributionToContentDiscoveryDisabled): self
    {
        $this->contributionToContentDiscoveryDisabled = $contributionToContentDiscoveryDisabled;
        return $this;
    }

    public function getItemInsights(): ?string
    {
        return $this->itemInsights;
    }

    public function setItemInsights(?string $itemInsights): self
    {
        $this->itemInsights = $itemInsights;
        return $this;
    }

    public function getShiftPreferences(): ?string
    {
        return $this->shiftPreferences;
    }

    public function setShiftPreferences(?string $shiftPreferences): self
    {
        $this->shiftPreferences = $shiftPreferences;
        return $this;
    }

    public function getStorage(): ?string
    {
        return $this->storage;
    }

    public function setStorage(?string $storage): self
    {
        $this->storage = $storage;
        return $this;
    }

    public function getWindows(): ?string
    {
        return $this->windows;
    }

    public function setWindows(?string $windows): self
    {
        $this->windows = $windows;
        return $this;
    }

}
