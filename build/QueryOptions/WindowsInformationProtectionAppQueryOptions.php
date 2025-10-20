<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionApp resources
 *
 * Available select fields:
 * - denied
 * - description
 * - displayName
 * - productName
 * - publisherName
 */
class WindowsInformationProtectionAppQueryOptions extends QueryOptions
{
    public const FIELD_DENIED = 'denied';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_PRODUCT_NAME = 'productName';
    public const FIELD_PUBLISHER_NAME = 'publisherName';

    /**
     * Select specific WindowsInformationProtectionApp properties
     * 
     * @param array<string> $select Use WindowsInformationProtectionAppQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
