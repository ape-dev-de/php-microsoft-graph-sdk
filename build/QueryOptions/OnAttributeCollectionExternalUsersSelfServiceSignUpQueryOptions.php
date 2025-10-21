<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAttributeCollectionExternalUsersSelfServiceSignUp resources
 *
 * Available select fields:
 * - attributeCollectionPage
 * - attributes
 */
class OnAttributeCollectionExternalUsersSelfServiceSignUpQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnAttributeCollectionExternalUsersSelfServiceSignUp
     */
    public const FIELD_ATTRIBUTE_COLLECTION_PAGE = 'attributeCollectionPage';
    public const FIELD_ATTRIBUTES = 'attributes';

    /**
     * Select specific OnAttributeCollectionExternalUsersSelfServiceSignUp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
