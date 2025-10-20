<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceCustomTaskExtensionCalloutData resources
 *
 * Available select fields:
 * - subject
 * - task
 * - taskProcessingresult
 * - workflow
 */
class IdentityGovernanceCustomTaskExtensionCalloutDataQueryOptions extends QueryOptions
{
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_TASK = 'task';
    public const FIELD_TASK_PROCESSINGRESULT = 'taskProcessingresult';
    public const FIELD_WORKFLOW = 'workflow';

    /**
     * Select specific IdentityGovernanceCustomTaskExtensionCalloutData properties
     * 
     * @param array<string> $select Use IdentityGovernanceCustomTaskExtensionCalloutDataQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
