<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalUsersSelfServiceSignUpEventsFlow resources
 *
 * Available select fields:
 * - onAttributeCollection
 * - onAttributeCollectionStart
 * - onAttributeCollectionSubmit
 * - onAuthenticationMethodLoadStart
 * - onInteractiveAuthFlowStart
 * - onUserCreateStart
 */
class ExternalUsersSelfServiceSignUpEventsFlowQueryOptions extends QueryOptions
{
    public const FIELD_ON_ATTRIBUTE_COLLECTION = 'onAttributeCollection';
    public const FIELD_ON_ATTRIBUTE_COLLECTION_START = 'onAttributeCollectionStart';
    public const FIELD_ON_ATTRIBUTE_COLLECTION_SUBMIT = 'onAttributeCollectionSubmit';
    public const FIELD_ON_AUTHENTICATION_METHOD_LOAD_START = 'onAuthenticationMethodLoadStart';
    public const FIELD_ON_INTERACTIVE_AUTH_FLOW_START = 'onInteractiveAuthFlowStart';
    public const FIELD_ON_USER_CREATE_START = 'onUserCreateStart';

    /**
     * Select specific ExternalUsersSelfServiceSignUpEventsFlow properties
     * 
     * @param array<string> $select Use ExternalUsersSelfServiceSignUpEventsFlowQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
