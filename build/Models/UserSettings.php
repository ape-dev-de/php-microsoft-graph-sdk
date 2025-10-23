<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSettings
 */
class UserSettings
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Reflects the organization level setting controlling delegate access to the trending API. When set to true, the organization doesn't have access to Office Delve. The relevancy of the content displayed in Microsoft 365, for example in Suggested sites in SharePoint Home and the Discover view in OneDrive for work or school is affected for the whole organization. This setting is read-only and can only be changed by administrators in the SharePoint admin center. */
    public ?bool $contributionToContentDiscoveryAsOrganizationDisabled = null;

    /** When set to true, the delegate access to the user's trending API is disabled. When set to true, documents in the user's Office Delve are disabled. When set to true, the relevancy of the content displayed in Microsoft 365, for example in Suggested sites in SharePoint Home and the Discover view in OneDrive for work or school is affected. Users can control this setting in Office Delve. */
    public ?bool $contributionToContentDiscoveryDisabled = null;

    /** 
     * The user's settings for the visibility of meeting hour insights, and insights derived between a user and other items in Microsoft 365, such as documents or sites. Get userInsightsSettings through this navigation property.
     * @var UserInsightsSettings|\stdClass|null
     */
    public mixed $itemInsights = null;

    /** 
     * 
     * @var ShiftPreferences|\stdClass|null
     */
    public mixed $shiftPreferences = null;

    /** 
     * 
     * @var UserStorage|\stdClass|null
     */
    public mixed $storage = null;

    /** 
     * 
     * @var WindowsSetting[]
     */
    public array $windows = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['contributionToContentDiscoveryAsOrganizationDisabled'])) {
            $this->contributionToContentDiscoveryAsOrganizationDisabled = $data['contributionToContentDiscoveryAsOrganizationDisabled'];
        }
        if (isset($data['contributionToContentDiscoveryDisabled'])) {
            $this->contributionToContentDiscoveryDisabled = $data['contributionToContentDiscoveryDisabled'];
        }
        if (isset($data['itemInsights'])) {
            $this->itemInsights = $data['itemInsights'];
        }
        if (isset($data['shiftPreferences'])) {
            $this->shiftPreferences = $data['shiftPreferences'];
        }
        if (isset($data['storage'])) {
            $this->storage = $data['storage'];
        }
        if (isset($data['windows'])) {
            $this->windows = $data['windows'];
        }
    }
}
