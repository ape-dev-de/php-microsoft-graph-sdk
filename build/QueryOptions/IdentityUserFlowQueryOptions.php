<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityUserFlow resources
 *
 * Available select fields:
 * - userFlowType
 * - userFlowTypeVersion
 */
class IdentityUserFlowQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityUserFlow
     */
    public const FIELD_USER_FLOW_TYPE = 'userFlowType';
    public const FIELD_USER_FLOW_TYPE_VERSION = 'userFlowTypeVersion';

    /**
     * Select specific IdentityUserFlow properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
