<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTaskDefinition resources
 *
 * Available select fields:
 * - category
 * - continueOnError
 * - description
 * - displayName
 * - parameters
 * - version
 */
class IdentityGovernanceTaskDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceTaskDefinition
     */
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CONTINUE_ON_ERROR = 'continueOnError';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_PARAMETERS = 'parameters';
    public const FIELD_VERSION = 'version';

    /**
     * Select specific IdentityGovernanceTaskDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
