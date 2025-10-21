<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRbacResourceAction resources
 *
 * Available select fields:
 * - actionVerb
 * - authenticationContextId
 * - description
 * - isAuthenticationContextSettable
 * - name
 * - resourceScopeId
 */
class UnifiedRbacResourceActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRbacResourceAction
     */
    public const FIELD_ACTION_VERB = 'actionVerb';
    public const FIELD_AUTHENTICATION_CONTEXT_ID = 'authenticationContextId';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_IS_AUTHENTICATION_CONTEXT_SETTABLE = 'isAuthenticationContextSettable';
    public const FIELD_NAME = 'name';
    public const FIELD_RESOURCE_SCOPE_ID = 'resourceScopeId';

    /**
     * Select specific UnifiedRbacResourceAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
