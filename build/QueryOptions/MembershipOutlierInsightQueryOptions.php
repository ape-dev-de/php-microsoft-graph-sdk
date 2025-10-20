<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MembershipOutlierInsight resources
 *
 * Available select fields:
 * - containerId
 * - memberId
 * - outlierContainerType
 * - outlierMemberType
 * - container
 * - lastModifiedBy
 * - member
 */
class MembershipOutlierInsightQueryOptions extends QueryOptions
{
    public const FIELD_CONTAINER_ID = 'containerId';
    public const FIELD_MEMBER_ID = 'memberId';
    public const FIELD_OUTLIER_CONTAINER_TYPE = 'outlierContainerType';
    public const FIELD_OUTLIER_MEMBER_TYPE = 'outlierMemberType';
    public const FIELD_CONTAINER = 'container';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_MEMBER = 'member';

    /**
     * Select specific MembershipOutlierInsight properties
     * 
     * @param array<string> $select Use MembershipOutlierInsightQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
