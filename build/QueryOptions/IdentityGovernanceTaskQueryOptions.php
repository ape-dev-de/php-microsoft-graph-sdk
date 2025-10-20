<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTask resources
 *
 * Available select fields:
 * - arguments
 * - category
 * - continueOnError
 * - description
 * - displayName
 * - executionSequence
 * - isEnabled
 * - taskDefinitionId
 * - taskProcessingResults
 */
class IdentityGovernanceTaskQueryOptions extends QueryOptions
{
    public const FIELD_ARGUMENTS = 'arguments';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CONTINUE_ON_ERROR = 'continueOnError';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EXECUTION_SEQUENCE = 'executionSequence';
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_TASK_DEFINITION_ID = 'taskDefinitionId';
    public const FIELD_TASK_PROCESSING_RESULTS = 'taskProcessingResults';

    /**
     * Select specific IdentityGovernanceTask properties
     * 
     * @param array<string> $select Use IdentityGovernanceTaskQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
