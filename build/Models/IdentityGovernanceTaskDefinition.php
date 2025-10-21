<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTaskDefinition
 */
class IdentityGovernanceTaskDefinition
{
    public function __construct(
        /**  */
        public ?string $category = null,
        /** Defines if the workflow will continue if the task has an error. */
        public ?bool $continueOnError = null,
        /** The description of the taskDefinition. */
        public ?string $description = null,
        /** The display name of the taskDefinition.Supports $filter(eq, ne) and $orderby. */
        public ?string $displayName = null,
        /** The parameters that must be supplied when creating a workflow task object.Supports $filter(any). */
        public array $parameters = [],
        /** The version number of the taskDefinition. New records are pushed when we add support for new parameters.Supports $filter(ge, gt, le, lt, eq, ne) and $orderby. */
        public ?string $version = null
    ) {}
}
