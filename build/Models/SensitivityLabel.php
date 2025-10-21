<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SensitivityLabel
 */
class SensitivityLabel
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $actionSource = null,
        /**  */
        public ?string $autoTooltip = null,
        /**  */
        public ?string $description = null,
        /**  */
        public ?string $displayName = null,
        /**  */
        public ?bool $isDefault = null,
        /**  */
        public ?bool $isEndpointProtectionEnabled = null,
        /**  */
        public ?bool $isScopedToUser = null,
        /**  */
        public ?string $locale = null,
        /**  */
        public ?string $name = null,
        /**  */
        public ?float $priority = null,
        /**  */
        public ?string $toolTip = null,
        /**  */
        public ?string $rights = null,
        /**  */
        public array $sublabels = []
    ) {}
}
