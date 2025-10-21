<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalUsersSelfServiceSignUpEventsFlow
 */
class ExternalUsersSelfServiceSignUpEventsFlow
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The conditions representing the context of the authentication request that's used to decide whether the events policy is invoked.  Supports $filter (eq). See support for filtering on user flows for syntax information. */
        public ?string $conditions = null,
        /** The description of the events policy. */
        public ?string $description = null,
        /** Required. The display name for the events policy. */
        public ?string $displayName = null,
        /** The configuration for what to invoke when attributes are ready to be collected from the user. */
        public ?string $onAttributeCollection = null,
        /** The configuration for what to invoke when attribution collection starts. */
        public ?string $onAttributeCollectionStart = null,
        /** The configuration for what to invoke when attributes are submitted at the end of attribution collection. */
        public ?string $onAttributeCollectionSubmit = null,
        /** Required. The configuration for what to invoke when authentication methods are ready to be presented to the user. Must have at least one identity provider linked.  Supports $filter (eq). See support for filtering on user flows for syntax information. */
        public ?string $onAuthenticationMethodLoadStart = null,
        /** Required. The configuration for what to invoke when an authentication flow is ready to be initiated. */
        public ?string $onInteractiveAuthFlowStart = null,
        /** The configuration for what to invoke during user creation. */
        public ?string $onUserCreateStart = null
    ) {}
}
