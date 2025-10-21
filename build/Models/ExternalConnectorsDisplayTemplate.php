<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsDisplayTemplate
 */
class ExternalConnectorsDisplayTemplate
{
    public function __construct(
        /** The text identifier for the display template; for example, contosoTickets. Maximum 16 characters. Only alphanumeric characters allowed. */
        public ?string $id = null,
        /** The definition of the content's appearance, represented by an Adaptive Card, which is a JSON-serialized card object model. */
        public ?string $layout = null,
        /** Defines the priority of a display template. A display template with priority 1 is evaluated before a template with priority 4. Gaps in priority values are supported. Must be positive value. */
        public ?float $priority = null,
        /** Specifies additional rules for selecting this display template based on the item schema. Optional. */
        public array $rules = []
    ) {}
}
