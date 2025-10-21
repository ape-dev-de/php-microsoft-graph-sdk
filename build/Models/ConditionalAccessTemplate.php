<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessTemplate
 */
class ConditionalAccessTemplate
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The user-friendly name of the template. */
        public ?string $description = null,
        /**  */
        public ?ConditionalAccessPolicyDetail $details = null,
        /** The user-friendly name of the template. */
        public ?string $name = null,
        /**  */
        public ?TemplateScenarios $scenarios = null
    ) {}
}
