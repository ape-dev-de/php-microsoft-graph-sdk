<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentRequestCallbackData resources
 *
 * Available select fields:
 * - customExtensionStageInstanceDetail
 * - customExtensionStageInstanceId
 * - stage
 * - state
 */
class AccessPackageAssignmentRequestCallbackDataQueryOptions extends QueryOptions
{
    public const FIELD_CUSTOM_EXTENSION_STAGE_INSTANCE_DETAIL = 'customExtensionStageInstanceDetail';
    public const FIELD_CUSTOM_EXTENSION_STAGE_INSTANCE_ID = 'customExtensionStageInstanceId';
    public const FIELD_STAGE = 'stage';
    public const FIELD_STATE = 'state';

    /**
     * Select specific AccessPackageAssignmentRequestCallbackData properties
     * 
     * @param array<string> $select Use AccessPackageAssignmentRequestCallbackDataQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
