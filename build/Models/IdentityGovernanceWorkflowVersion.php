<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflowVersion
 */
class IdentityGovernanceWorkflowVersion
{
    public function __construct(
        /** The version of the workflow.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
        public ?string $versionNumber = null
    ) {}
}
