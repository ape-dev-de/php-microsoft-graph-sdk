<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnPremisesExtensionAttributes resources
 *
 * Available select fields:
 * - extensionAttribute1
 * - extensionAttribute10
 * - extensionAttribute11
 * - extensionAttribute12
 * - extensionAttribute13
 * - extensionAttribute14
 * - extensionAttribute15
 * - extensionAttribute2
 * - extensionAttribute3
 * - extensionAttribute4
 * - extensionAttribute5
 * - extensionAttribute6
 * - extensionAttribute7
 * - extensionAttribute8
 * - extensionAttribute9
 */
class OnPremisesExtensionAttributesQueryOptions extends QueryOptions
{
    public const FIELD_EXTENSION_ATTRIBUTE1 = 'extensionAttribute1';
    public const FIELD_EXTENSION_ATTRIBUTE10 = 'extensionAttribute10';
    public const FIELD_EXTENSION_ATTRIBUTE11 = 'extensionAttribute11';
    public const FIELD_EXTENSION_ATTRIBUTE12 = 'extensionAttribute12';
    public const FIELD_EXTENSION_ATTRIBUTE13 = 'extensionAttribute13';
    public const FIELD_EXTENSION_ATTRIBUTE14 = 'extensionAttribute14';
    public const FIELD_EXTENSION_ATTRIBUTE15 = 'extensionAttribute15';
    public const FIELD_EXTENSION_ATTRIBUTE2 = 'extensionAttribute2';
    public const FIELD_EXTENSION_ATTRIBUTE3 = 'extensionAttribute3';
    public const FIELD_EXTENSION_ATTRIBUTE4 = 'extensionAttribute4';
    public const FIELD_EXTENSION_ATTRIBUTE5 = 'extensionAttribute5';
    public const FIELD_EXTENSION_ATTRIBUTE6 = 'extensionAttribute6';
    public const FIELD_EXTENSION_ATTRIBUTE7 = 'extensionAttribute7';
    public const FIELD_EXTENSION_ATTRIBUTE8 = 'extensionAttribute8';
    public const FIELD_EXTENSION_ATTRIBUTE9 = 'extensionAttribute9';

    /**
     * Select specific OnPremisesExtensionAttributes properties
     * 
     * @param array<string> $select Use OnPremisesExtensionAttributesQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
