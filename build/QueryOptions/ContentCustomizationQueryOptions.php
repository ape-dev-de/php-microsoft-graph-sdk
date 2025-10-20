<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ContentCustomization resources
 *
 * Available select fields:
 * - attributeCollection
 * - attributeCollectionRelativeUrl
 * - registrationCampaign
 * - registrationCampaignRelativeUrl
 */
class ContentCustomizationQueryOptions extends QueryOptions
{
    public const FIELD_ATTRIBUTE_COLLECTION = 'attributeCollection';
    public const FIELD_ATTRIBUTE_COLLECTION_RELATIVE_URL = 'attributeCollectionRelativeUrl';
    public const FIELD_REGISTRATION_CAMPAIGN = 'registrationCampaign';
    public const FIELD_REGISTRATION_CAMPAIGN_RELATIVE_URL = 'registrationCampaignRelativeUrl';

    /**
     * Select specific ContentCustomization properties
     * 
     * @param array<string> $select Use ContentCustomizationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
