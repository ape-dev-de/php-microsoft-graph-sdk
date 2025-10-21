<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSettings
 */
class UserSettings
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Reflects the organization level setting controlling delegate access to the trending API. When set to true, the organization doesn't have access to Office Delve. The relevancy of the content displayed in Microsoft 365, for example in Suggested sites in SharePoint Home and the Discover view in OneDrive for work or school is affected for the whole organization. This setting is read-only and can only be changed by administrators in the SharePoint admin center. */
        public ?bool $contributionToContentDiscoveryAsOrganizationDisabled = null,
        /** When set to true, the delegate access to the user's trending API is disabled. When set to true, documents in the user's Office Delve are disabled. When set to true, the relevancy of the content displayed in Microsoft 365, for example in Suggested sites in SharePoint Home and the Discover view in OneDrive for work or school is affected. Users can control this setting in Office Delve. */
        public ?bool $contributionToContentDiscoveryDisabled = null,
        /** The user's settings for the visibility of meeting hour insights, and insights derived between a user and other items in Microsoft 365, such as documents or sites. Get userInsightsSettings through this navigation property. */
        public ?UserInsightsSettings $itemInsights = null,
        /**  */
        public ?ShiftPreferences $shiftPreferences = null,
        /**  */
        public ?UserStorage $storage = null,
        /**  */
        public array $windows = []
    ) {}
}
