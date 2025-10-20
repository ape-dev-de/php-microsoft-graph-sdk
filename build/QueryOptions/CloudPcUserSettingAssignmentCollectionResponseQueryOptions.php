<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcUserSettingAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CloudPcUserSettingAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CloudPcUserSettingAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use CloudPcUserSettingAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
