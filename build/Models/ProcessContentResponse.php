<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessContentResponse
 */
class ProcessContentResponse
{
    public function __construct(
        /** A collection of policy actions (like DLP actions) triggered by the processed content. NOTE: Currently, the only policy action supported in for this resource type is restrictAccess. */
        public array $policyActions = [],
        /** A collection of errors encountered during the content processing. */
        public array $processingErrors = [],
        /**  */
        public ?ProtectionScopeState $protectionScopeState = null
    ) {}
}
