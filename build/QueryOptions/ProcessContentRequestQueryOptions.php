<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProcessContentRequest resources
 *
 * Available select fields:
 * - activityMetadata
 * - contentEntries
 * - deviceMetadata
 * - integratedAppMetadata
 * - protectedAppMetadata
 */
class ProcessContentRequestQueryOptions extends QueryOptions
{
    public const FIELD_ACTIVITY_METADATA = 'activityMetadata';
    public const FIELD_CONTENT_ENTRIES = 'contentEntries';
    public const FIELD_DEVICE_METADATA = 'deviceMetadata';
    public const FIELD_INTEGRATED_APP_METADATA = 'integratedAppMetadata';
    public const FIELD_PROTECTED_APP_METADATA = 'protectedAppMetadata';

    /**
     * Select specific ProcessContentRequest properties
     * 
     * @param array<string> $select Use ProcessContentRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
