<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserFlowApiConnectorConfiguration resources
 *
 * Available select fields:
 * - postAttributeCollection
 * - postFederationSignup
 */
class UserFlowApiConnectorConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_POST_ATTRIBUTE_COLLECTION = 'postAttributeCollection';
    public const FIELD_POST_FEDERATION_SIGNUP = 'postFederationSignup';

    /**
     * Select specific UserFlowApiConnectorConfiguration properties
     * 
     * @param array<string> $select Use UserFlowApiConnectorConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
