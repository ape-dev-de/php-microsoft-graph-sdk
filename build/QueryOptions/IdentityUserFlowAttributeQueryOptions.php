<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityUserFlowAttribute resources
 *
 * Available select fields:
 * - dataType
 * - description
 * - displayName
 * - userFlowAttributeType
 */
class IdentityUserFlowAttributeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityUserFlowAttribute
     */
    public const FIELD_DATA_TYPE = 'dataType';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_USER_FLOW_ATTRIBUTE_TYPE = 'userFlowAttributeType';

    /**
     * Select specific IdentityUserFlowAttribute properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
