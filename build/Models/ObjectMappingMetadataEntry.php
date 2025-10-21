<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ObjectMappingMetadataEntry
 */
class ObjectMappingMetadataEntry
{
    public function __construct(
        /** Possible values are: EscrowBehavior, DisableMonitoringForChanges, OriginalJoiningProperty, Disposition, IsCustomerDefined, ExcludeFromReporting, Unsynchronized. */
        public ?string $key = null,
        /** Value of the metadata property. */
        public ?string $value = null
    ) {}
}
